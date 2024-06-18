<?php

namespace App\Livewire\Dashboard\Products\Group\SubCategories\Components;

use App\Livewire\Forms\SubCategoryForm;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class SubCategoriesEdit extends Component
{


    use HelperTrait;





    // :: variables
    public SubCategoryForm $instance;






    #[On('editSubCategory')]
    public function remount($id)
    {



        // 1: get instance
        $subCategory = SubCategory::find($id);


        foreach ($subCategory->toArray() as $key => $value)
            $this->instance->{$key} = $value;







        // -----------------------------------------
        // -----------------------------------------




        // 2: setSelect
        $this->dispatch('setSelect', id: '#category-select-2', value: $subCategory->categoryId);




    } // end function








    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: validation
        $this->instance->validate();







        // 1: get instance
        $subCategory = SubCategory::find($this->instance->id);






        // 1.2: general
        $subCategory->name = $this->instance->name ?? null;
        $subCategory->nameAr = $this->instance->nameAr ?? null;
        $subCategory->categoryId = $this->instance->categoryId ?? null;



        $subCategory->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('resetModalSelect');
        $this->dispatch('refreshSubCategories');
        $this->dispatch('closeModal', modal: '#subCategories-edit .btn-close');

        $this->makeAlert('success', 'Sub-Category has been updated');







    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $categories = Category::all();






        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.products.group.sub-categories.components.sub-categories-edit', compact('categories'));


    } // end function





} // end class
