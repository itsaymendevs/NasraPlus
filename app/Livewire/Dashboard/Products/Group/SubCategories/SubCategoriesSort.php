<?php

namespace App\Livewire\Dashboard\Products\Group\SubCategories;

use App\Models\SubCategory;
use App\Traits\HelperTrait;
use Livewire\Component;

class SubCategoriesSort extends Component
{


    use HelperTrait;


    // :: variables
    public $subCategories;






    public function mount($id)
    {


        // 1: dependencies
        $this->subCategories = SubCategory::where('categoryId', $id)->orderBy('index')->get();



    } // end function







    // ---------------------------------------------------------------------------








    public function update($list)
    {



        // 1: loop - list
        foreach ($list ?? [] as $key => $subCategoryId) {


            // 1.2: update index
            $subCategory = SubCategory::find($subCategoryId);

            $subCategory->index = $key + 1;
            $subCategory->save();


        } // end loop




        $this->alert('info', 'Sub-Categories has been sorted');


    } // end function







    // ---------------------------------------------------------------------------





    public function render()
    {


        return view('livewire.dashboard.products.group.sub-categories.sub-categories-sort');


    } // end function






} // end class
