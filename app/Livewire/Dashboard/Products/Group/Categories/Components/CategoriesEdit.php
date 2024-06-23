<?php

namespace App\Livewire\Dashboard\Products\Group\Categories\Components;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class CategoriesEdit extends Component
{


   use HelperTrait;
   use WithFileUploads;





   // :: variables
   public CategoryForm $instance;






   #[On('editCategory')]
   public function remount($id)
   {



      // 1: get instance
      $category = Category::find($id);


      foreach ($category->toArray() as $key => $value)
         $this->instance->{$key} = $value;




      // 1.2: cloneFiles
      $this->instance->imageFileName = $this->instance->imageFile ?? null;









      // -----------------------------------
      // -----------------------------------






      // 2: setFilePreview
      $preview = $this->instance->imageFile ?
         url('storage/categories/' . $this->instance->imageFile) : $this->getDefaultPreview();

      $this->dispatch('setFilePreview', filePreview: 'category--preview-2', defaultPreview: $preview);





   } // end function








   // ---------------------------------------------------------------------------






   public function update()
   {




      // 1: validation
      $this->instance->validate();






      // 1.2: uploadFile
      if ($this->instance->imageFile != $this->instance->imageFileName)
         $this->instance->imageFileName = $this->replaceFile($this->instance->imageFile, 'categories', $this->instance->imageFileName, 'CAT');









      // ---------------------------------------------------
      // ---------------------------------------------------









      // 2: get instance
      $category = Category::find($this->instance->id);






      // 2.1: general
      $category->name = $this->instance->name ?? null;
      $category->nameAr = $this->instance->nameAr ?? null;
      $category->imageFile = $this->instance->imageFileName ?? null;


      $category->save();








      // 2: reset
      $this->instance->reset();
      $this->dispatch('refreshCategories');
      $this->dispatch('resetFile', file: 'category--file-2', defaultPreview: $this->getDefaultPreview());
      $this->dispatch('closeModal', modal: '#categories-edit .btn-close');

      $this->makeAlert('success', 'Category has been updated');







   } // end function





   // ---------------------------------------------------------------------------








   public function render()
   {



      // :: initTooltips
      $this->dispatch('initTooltips');


      return view('livewire.dashboard.products.group.categories.components.categories-edit');


   } // end function





} // end class
