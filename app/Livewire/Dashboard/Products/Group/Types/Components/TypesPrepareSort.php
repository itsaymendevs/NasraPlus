<?php

namespace App\Livewire\Dashboard\Products\Group\Types\Components;

use App\Models\SubCategory;
use Livewire\Component;

class TypesPrepareSort extends Component
{



    // :: variables
    public $subCategoryId;




    public function sort()
    {



        // 1: startSorting
        if ($this->subCategoryId)
            return redirect()->route('dashboard.sortTypes', [$this->subCategoryId]);



    } // end function







    // ---------------------------------------------------------------------------







    public function render()
    {


        // 1: dependencies
        $subCategories = SubCategory::all();



        return view('livewire.dashboard.products.group.types.components.types-prepare-sort', compact('subCategories'));


    } // end function






} // end class
