<?php

namespace App\Livewire\Dashboard\Products\Group\SubCategories\Components;

use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Component;

class SubCategoriesPrepareSort extends Component
{



    // :: variables
    public $categoryId;




    public function sort()
    {



        // 1: startSorting
        if ($this->categoryId)
            return redirect()->route('dashboard.sortSubCategories', [$this->categoryId]);



    } // end function







    // ---------------------------------------------------------------------------







    public function render()
    {


        // 1: dependencies
        $categories = Category::all();



        return view('livewire.dashboard.products.group.sub-categories.components.sub-categories-prepare-sort', compact('categories'));


    } // end function






} // end class
