<?php

namespace App\Livewire\Dashboard\Products\Group\Types\Components;

use App\Livewire\Forms\TypeForm;
use App\Models\SubCategory;
use App\Models\Type;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class TypesEdit extends Component
{


    use HelperTrait;


    // :: variables
    public TypeForm $instance;







    #[On('editType')]
    public function remount($id)
    {



        // 1: get instance
        $type = Type::find($id);


        foreach ($type->toArray() as $key => $value)
            $this->instance->{$key} = $value;







        // -----------------------------------------
        // -----------------------------------------





        // 2: setSelect
        $this->dispatch('setSelect', id: '#subCategory-select-2', value: $type->subCategoryId);




    } // end function








    // ---------------------------------------------------------------------------








    public function update()
    {



        // :: validation
        $this->instance->validate();





        // 1: getSubCategory
        $subCategory = SubCategory::find($this->instance->subCategoryId);







        // ---------------------------------------
        // ---------------------------------------







        // 2: create instance
        $type = Type::find($this->instance->id);





        // 2.1: general
        $type->name = $this->instance->name ?? null;
        $type->nameAr = $this->instance->nameAr ?? null;





        // 2.2: sort
        if ($type->subCategoryId != $this->instance->subCategoryId)
            $type->index = (Type::where('subCategoryId', $this->instance->subCategoryId)->orderBy('index', 'desc')->first()->index ?? 0) + 1;




        $type->categoryId = $subCategory->categoryId ?? null;
        $type->subCategoryId = $this->instance->subCategoryId ?? null;


        $type->save();








        // 3: reset
        $this->instance->reset();
        $this->dispatch('resetModalSelect');
        $this->dispatch('refreshTypes');
        $this->dispatch('closeModal', modal: '#types-edit .btn-close');

        $this->makeAlert('success', 'Type has been updated');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $subCategories = SubCategory::all();




        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.types.components.types-edit', compact('subCategories'));



    } // end function






} // end class
