<?php

namespace App\Livewire\Dashboard\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Models\Unit;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsCreate extends Component
{


    use HelperTrait;
    use WithFileUploads;




    // :: variables
    public ProductForm $instance;







    public function mount()
    {

        // 1: defaultValues
        $this->instance->weightOption = 'Fixed';


    } // end function








    // ---------------------------------------------------------------------------













    public function store()
    {



        // 1: validation
        $this->instance->validate();






        // 1.2: uploadFile
        if ($this->instance->imageFile)
            $this->instance->imageFileName = $this->uploadFile($this->instance->imageFile, 'products/', 'PRD');


        if ($this->instance->secondImageFile)
            $this->instance->secondImageFileName = $this->uploadFile($this->instance->secondImageFile, 'products/', 'PRD');



        if ($this->instance->thirdImageFile)
            $this->instance->thirdImageFileName = $this->uploadFile($this->instance->thirdImageFile, 'products/', 'PRD');



        if ($this->instance->fourthImageFile)
            $this->instance->fourthImageFileName = $this->uploadFile($this->instance->fourthImageFile, 'products/', 'PRD');







        // ---------------------------------------------------
        // ---------------------------------------------------









        // 2: create instance
        $product = new Product();





        // 2.1: general
        $product->serial = $this->instance->serial ?? null;
        $product->name = $this->instance->name ?? null;
        $product->nameAr = $this->instance->nameAr ?? null;


        // 2.2: company - categories
        $product->companyId = $this->instance->companyId ?? null;
        $product->categoryId = $this->instance->categoryId ?? null;
        $product->subCategoryId = $this->instance->subCategoryId ?? null;
        $product->typeId = $this->instance->typeId ?? null;





        // 2.3: buyPrice - sellPrice - offerPrice
        $product->buyPrice = $this->instance->buyPrice ?? null;
        $product->sellPrice = $this->instance->sellPrice ?? null;
        $product->offerPrice = $this->instance->offerPrice ?? null;






        // --------------------------------------------------
        // --------------------------------------------------





        // 2.4: weight - units - quantity
        $product->weight = $this->instance->weight ?? null;
        $product->unitId = $this->instance->unitId ?? null;
        $product->weightOption = $this->instance->weightOption ?? null;



        $product->units = $this->instance->units ?? null;
        $product->quantityPerUnit = $this->instance->quantityPerUnit ?? null;
        $product->quantity = $this->instance->quantity ?? 0;
        $product->maxQuantityPerOrder = $this->instance->maxQuantityPerOrder ?? null;








        // 2.5: information
        $product->information = $this->instance->information ?? null;
        $product->informationAr = $this->instance->informationAr ?? null;



        // 2.5: hidden - mainPage
        $product->isHidden = $this->instance->isHidden ?? false;
        $product->isMainPage = $this->instance->isMainPage ?? false;






        // 2.7: imageFiles
        $product->imageFile = $this->instance->imageFileName ?? null;
        $product->secondImageFile = $this->instance->secondImageFileName ?? null;
        $product->thirdImageFile = $this->instance->thirdImageFileName ?? null;
        $product->fourthImageFile = $this->instance->fourthImageFileName ?? null;






        // 2.8: re-fix weight
        if ($this->instance->weight == 'Namefull')
            $this->instance->weight = 1;








        // 2.9: sortCategory
        $product->index = (Product::where('typeId', $this->instance->typeId)?->orderBy('index', 'desc')?->first()?->index ?? 0) + 1;




        // 2.9.5: sortMainPage
        if ($product->isMainPage)
            $product->indexMainPage = (Product::where('isMainPage', true)?->orderBy('indexMainPage', 'desc')?->first()?->indexMainPage ?? 0) + 1;






        $product->save();








        // 2: reset
        $this->instance->reset();
        $this->instance->weightOption = 'Fixed';

        $this->dispatch('resetSelect');
        $this->dispatch('resetFile', file: 'product--file-1', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('resetFile', file: 'product--file-2', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('resetFile', file: 'product--file-3', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('resetFile', file: 'product--file-4', defaultPreview: $this->getDefaultPreview());



        $this->makeAlert('success', 'Product has been created');






    } // end function









    // ---------------------------------------------------------------------------









    public function render()
    {



        // 1: dependencies
        $units = Unit::all();
        $companies = Company::all();
        $categories = Category::all();
        $dynamicSizes = [0.25, 0.5, 1.0];





        // 1.2: calculateQuantity
        $this->instance->quantity = ($this->instance?->units > 0 ? $this->instance->units : 0) * ($this->instance?->quantityPerUnit ? $this->instance->quantityPerUnit : 0);




        return view('livewire.dashboard.products.products-create', compact('units', 'companies', 'categories', 'dynamicSizes'));



    } // end function





} // end class
