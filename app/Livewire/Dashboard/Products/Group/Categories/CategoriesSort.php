<?php

namespace App\Livewire\Dashboard\Products\Group\Categories;

use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Component;

class CategoriesSort extends Component
{


    use HelperTrait;

    public $categories;






    public function mount()
    {



        // 1: dependencies
        $this->categories = Category::orderBy('index')->get();



    } // end function







    // ---------------------------------------------------------------------------








    public function update($list)
    {



        // 1: loop - list
        foreach ($list ?? [] as $key => $categoryId) {


            // 1.2: update index
            $category = Category::find($categoryId);

            $category->index = $key + 1;
            $category->save();


        } // end loop



        $this->alert('info', 'Categories has been sorted');


    } // end function







    // ---------------------------------------------------------------------------





    public function render()
    {


        return view('livewire.dashboard.products.group.categories.categories-sort');


    } // end function






} // end class
