<?php

namespace App\Livewire\Dashboard;

use App\Exports\ProductExport;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Products extends Component
{


    use HelperTrait;
    use WithPagination;





    // :: variables
    public $searchGroup, $searchCategory, $searchSubCategory, $searchType, $searchProduct, $searchCompany;






    public function mount()
    {


        // 1: defaultValues
        $this->searchGroup = "byGeneralTypes";



    } // end function







    // ---------------------------------------------------------------------------







    public function switchFilterGroup()
    {



        // 1: initSelect
        $this->dispatch('initSelect');



    } // end function








    // ---------------------------------------------------------------------------









    public function toggleMainPage($id)
    {



        // 1: get instance
        $product = Product::find($id);




        // 1.2: toggleHidden
        $product->isMainPage = ! $product->isMainPage;
        $product->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function








    // ---------------------------------------------------------------------------










    public function toggleHidden($id)
    {



        // 1: get instance
        $product = Product::find($id);




        // 1.2: toggleHidden
        $product->isHidden = ! $product->isHidden;
        $product->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmProductRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmProductRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Product::find($this->removeId)->delete();

            $this->makeAlert('info', 'Product has been removed');


        } // end if




        // :: re-render
        $this->render();




    } // end function







    // ---------------------------------------------------------------------------






    public function rerender()
    {

        $this->render();

    } // end function











    // ---------------------------------------------------------------------------







    public function export($lang)
    {


        // 1: prepExport




        // 1.2: dependencies
        $products = Product::where('name', 'LIKE', '%' . $this->searchProduct . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchProduct . '%')->get();







        // -------------------------------------------------
        // -------------------------------------------------







        // 1.3: filterProducts
        $filtered = $products->filter(function ($item) {

            $toReturn = true;



            // 1: groupOne
            if ($this->searchGroup == 'byGeneralTypes') {


                // 1.2: category
                $this->searchCategory ? $item?->categoryId != $this->searchCategory ? $toReturn = false : null : null;


                // 1.3: subCategory
                $this->searchSubCategory ? $item?->subCategoryId != $this->searchSubCategory ? $toReturn = false : null : null;


                // 1.4: type
                $this->searchType ? $item?->typeId != $this->searchType ? $toReturn = false : null : null;


                return $toReturn;






                // 2: groupThree
            } elseif ($this->searchGroup == 'byCompanies') {


                // 2.1: company
                $this->searchCompany ? $item?->companyId != $this->searchCompany ? $toReturn = false : null : null;



                return $toReturn;




            } else {


                return $toReturn;

            } // end if



        }); // endFilters








        // -------------------------------------------------
        // -------------------------------------------------






        // 1.4: getProducts
        $products = Product::orderBy('created_at', 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->get();










        // 2: makeExport
        return Excel::download(new ProductExport($products), 'products.xlsx');






    } // end function








    // ---------------------------------------------------------------------------








    #[On('refreshProducts')]
    public function render()
    {


        // 1: dependencies
        $companies = Company::all();
        $categories = Category::all();


        $products = Product::where('name', 'LIKE', '%' . $this->searchProduct . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchProduct . '%')->get();







        // -------------------------------------------------
        // -------------------------------------------------







        // 1.2: filterProducts
        $filtered = $products->filter(function ($item) {

            $toReturn = true;



            // 1: groupOne
            if ($this->searchGroup == 'byGeneralTypes') {


                // 1.2: category
                $this->searchCategory ? $item?->categoryId != $this->searchCategory ? $toReturn = false : null : null;


                // 1.3: subCategory
                $this->searchSubCategory ? $item?->subCategoryId != $this->searchSubCategory ? $toReturn = false : null : null;


                // 1.4: type
                $this->searchType ? $item?->typeId != $this->searchType ? $toReturn = false : null : null;


                return $toReturn;






                // 2: groupThree
            } elseif ($this->searchGroup == 'byCompanies') {


                // 2.1: company
                $this->searchCompany ? $item?->companyId != $this->searchCompany ? $toReturn = false : null : null;



                return $toReturn;




            } else {


                return $toReturn;

            } // end if



        }); // endFilters








        // -------------------------------------------------
        // -------------------------------------------------






        // 1.3: getProducts
        $products = Product::orderBy('created_at', 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->paginate(env('PAGINATE_XXL'));









        // :: tooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products', compact('categories', 'products', 'companies'));




    } // end function







} // end class
