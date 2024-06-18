<?php

namespace App\Livewire\Dashboard\Products\Group\Categories\Components;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class CategoriesCreate extends Component
{




    use HelperTrait;
    use WithFileUploads;


    // :: variables
    public CategoryForm $instance;









    public function store()
    {



        // 1: validation
        $this->instance->validate();






        // 1.2: uploadFile
        if ($this->instance->imageFile)
            $this->instance->imageFileName = $this->uploadFile($this->instance->imageFile, 'categories', 'CAT');









        // ---------------------------------------------------
        // ---------------------------------------------------









        // 2: create instance
        $category = new Category();






        // 2.1: general
        $category->name = $this->instance->name ?? null;
        $category->nameAr = $this->instance->nameAr ?? null;
        $category->imageFile = $this->instance->imageFileName ?? null;


        $category->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshCategories');
        $this->dispatch('resetFile', file: 'category--file-1', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('closeModal', modal: '#categories-create .btn-close');

        $this->makeAlert('success', 'Category has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.categories.components.categories-create');



    } // end function






} // end class
