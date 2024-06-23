<?php

namespace App\Livewire\Dashboard\Products\Group\SubCategories\Components;

use App\Livewire\Forms\SubCategoryForm;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\HelperTrait;
use Livewire\Component;

class SubCategoriesCreate extends Component
{


    use HelperTrait;


    // :: variables
    public SubCategoryForm $instance;







    public function store()
    {



        // :: validation
        $this->instance->validate();




        // 1: create instance
        $subCategory = new SubCategory();






        // 1.2: general
        $subCategory->name = $this->instance->name ?? null;
        $subCategory->nameAr = $this->instance->nameAr ?? null;





        // 1.3: sort
        $subCategory->index = (SubCategory::where('categoryId', $this->instance->categoryId)->orderBy('index', 'desc')->first()->index ?? 0) + 1;




        // 1.4: category
        $subCategory->categoryId = $this->instance->categoryId ?? null;


        $subCategory->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('resetModalSelect');
        $this->dispatch('refreshSubCategories');
        $this->dispatch('closeModal', modal: '#subCategories-create .btn-close');

        $this->makeAlert('success', 'Category has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $categories = Category::all();




        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.sub-categories.components.sub-categories-create', compact('categories'));



    } // end function






} // end class
