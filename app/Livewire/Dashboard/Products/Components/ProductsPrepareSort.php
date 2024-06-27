<?php

namespace App\Livewire\Dashboard\Products\Components;

use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Component;

class ProductsPrepareSort extends Component
{

    use HelperTrait;



    // :: variables
    public $target, $categoryId, $subCategoryId, $typeId;










    public function sort()
    {


        // 1: determineSort




        // A: HomeProducts
        if ($this->target == 'Home Products') {

            return redirect()->route('dashboard.sortProducts', ['home']);



            // B: categorySort
        } elseif ($this->target == 'Category Products' && $this->categoryId && $this->subCategoryId && $this->typeId) {



            return redirect()->route('dashboard.sortProducts', [$this->typeId]);


        } // end if



    } // end function







    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $categories = Category::all();



        return view('livewire.dashboard.products.components.products-prepare-sort', compact('categories'));


    } // end function






} // end class
