<?php

namespace App\Livewire\Dashboard\Products\Group\Types\Components;

use App\Livewire\Forms\TypeForm;
use App\Models\SubCategory;
use App\Models\Type;
use App\Traits\HelperTrait;
use Livewire\Component;

class TypesCreate extends Component
{



    use HelperTrait;


    // :: variables
    public TypeForm $instance;







    public function store()
    {



        // :: validation
        $this->instance->validate();





        // 1: getSubCategory
        $subCategory = SubCategory::find($this->instance->subCategoryId);







        // ---------------------------------------
        // ---------------------------------------







        // 2: create instance
        $type = new Type();





        // 2.1: general
        $type->name = $this->instance->name ?? null;
        $type->nameAr = $this->instance->nameAr ?? null;
        $type->categoryId = $subCategory->categoryId ?? null;
        $type->subCategoryId = $this->instance->subCategoryId ?? null;


        $type->save();








        // 3: reset
        $this->instance->reset();
        $this->dispatch('resetModalSelect');
        $this->dispatch('refreshTypes');
        $this->dispatch('closeModal', modal: '#types-create .btn-close');

        $this->makeAlert('success', 'Type has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $subCategories = SubCategory::all();




        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.types.components.types-create', compact('subCategories'));



    } // end function






} // end class
