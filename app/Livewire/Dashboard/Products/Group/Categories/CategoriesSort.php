<?php

namespace App\Livewire\Dashboard\Products\Group\Categories;

use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Component;

class CategoriesSort extends Component
{


    use HelperTrait;

    public $list = [];



    public function mount()
    {



        // 1: dependencies
        $categories = Category::orderBy('index')->get();


        foreach ($categories ?? [] as $category)
            array_push($this->list, ['id' => $category->id, 'name' => $category->name, 'nameAr' => $category->nameAr]);




        dd($this->list);


    } // end function







    // ---------------------------------------------------------------------------





    public function render()
    {


        return view('livewire.dashboard.products.group.categories.categories-sort');


    } // end function






} // end class
