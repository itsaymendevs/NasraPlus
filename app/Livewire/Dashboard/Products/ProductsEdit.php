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

class ProductsEdit extends Component
{


    use HelperTrait;
    use WithFileUploads;




    // :: variables
    public ProductForm $instance;




    public function mount($id)
    {



        // 1: get instance
        $product = Product::find($id);


        foreach ($product?->toArray() ?? [] as $key => $value)
            $this->instance->{$key} = $value;





        // 1.2 imageFile - convertBoolean
        $this->instance->imageFileName = $this->instance->imageFile ?? null;
        $this->instance->secondImageFileName = $this->instance->secondImageFile ?? null;
        $this->instance->thirdImageFileName = $this->instance->thirdImageFile ?? null;
        $this->instance->fourthImageFileName = $this->instance->fourthImageFile ?? null;


        $this->instance->isHidden = boolval($this->instance->isHidden);
        $this->instance->isMainPage = boolval($this->instance->isMainPage);







        // 1.3: setSelect
        $this->dispatch('setSelect', id: '#company-select-1', value: $this->instance->companyId ?? null);
        $this->dispatch('setSelect', id: '#category-select-1', value: $this->instance->categoryId ?? null);
        $this->dispatch('setSelect', id: '#subCategory-select-1', value: $this->instance->subCategoryId ?? null);
        $this->dispatch('setSelect', id: '#type-select-1', value: $this->instance->typeId ?? null);
        $this->dispatch('setSelect', id: '#unit-select-1', value: $this->instance->unitId ?? null);








        // ------------------------------------------
        // ------------------------------------------






        // 2: setFilePreview
        $preview = $this->instance->imageFile ?
            url('storage/products/' . $this->instance->imageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'product--preview-1', defaultPreview: $preview);




        $preview = $this->instance->secondImageFile ?
            url('storage/products/' . $this->instance->secondImageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'product--preview-2', defaultPreview: $preview);



        $preview = $this->instance->thirdImageFile ?
            url('storage/products/' . $this->instance->thirdImageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'product--preview-3', defaultPreview: $preview);


        $preview = $this->instance->fourthImageFile ?
            url('storage/products/' . $this->instance->fourthImageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'product--preview-4', defaultPreview: $preview);






    } // end function















    // ---------------------------------------------------------------------------









    public function update()
    {



        // 1: validation
        $this->instance->validate();






        // 1.2: replaceFile
        if ($this->instance->imageFile != $this->instance->imageFileName)
            $this->instance->imageFileName = $this->replaceFile($this->instance->imageFile, 'products', $this->instance->imageFileName, 'PRD');





        if ($this->instance->secondImageFile != $this->instance->secondImageFileName)
            $this->instance->secondImageFileName = $this->replaceFile($this->instance->secondImageFile, 'products', $this->instance->secondImageFileName, 'PRD');




        if ($this->instance->thirdImageFile != $this->instance->thirdImageFileName)
            $this->instance->thirdImageFileName = $this->replaceFile($this->instance->thirdImageFile, 'products', $this->instance->thirdImageFileName, 'PRD');



        if ($this->instance->fourthImageFile != $this->instance->fourthImageFileName)
            $this->instance->fourthImageFileName = $this->replaceFile($this->instance->fourthImageFile, 'products', $this->instance->fourthImageFileName, 'PRD');








        // ---------------------------------------------------
        // ---------------------------------------------------









        // 2: get instance
        $product = Product::find($this->instance->id);





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







        // 2.8: determineWeightOption
        if ($this->instance->weightOption == 'By Name') {

            $product->weight = 1;
            $product->unitId = null;
            $this->instance->weight = 1;
            $this->instance->unitId = null;


        } // end id








        $product->save();








        // 2: alert
        $this->makeAlert('success', 'Product has been updated');






    } // end function









    // ---------------------------------------------------------------------------









    public function render()
    {




        // 1: dependencies
        $companies = Company::all();
        $categories = Category::all();
        $subCategories = [];
        $types = [];

        $units = Unit::all();
        $dynamicSizes = [0.25, 0.5, 1.0];







        // 1.2: calculateQuantity
        $this->instance->quantity = ($this->instance?->units > 0 ? $this->instance->units : 0) * ($this->instance?->quantityPerUnit ? $this->instance->quantityPerUnit : 0);




        return view('livewire.dashboard.products.products-edit', compact('units', 'companies', 'categories', 'subCategories', 'types', 'dynamicSizes'));





    } // end function





} // end class
