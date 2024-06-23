<?php

namespace App\Livewire\Dashboard\Stores;

use App\Livewire\Forms\PickupStoreForm;
use App\Models\PickupStore;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoresEdit extends Component
{



   use HelperTrait;
   use WithFileUploads;


   // :: variables
   public PickupStoreForm $instance;









   public function mount($id)
   {



      // 1: get instance
      $store = PickupStore::find($id);

      foreach ($store->toArray() as $key => $value)
         $this->instance->{$key} = $value;





      // 1.2 imageFile - convertBoolean
      $this->instance->imageFileName = $this->instance->imageFile ?? null;
      $this->instance->isMainStore = boolval($this->instance->isMainStore);
      $this->instance->isActive = boolval($this->instance->isActive);








      // ------------------------------------------
      // ------------------------------------------






      // 2: setFilePreview
      $preview = $this->instance->imageFile ?
         url('storage/pickup/stores/' . $this->instance->imageFile) : $this->getDefaultPreview();

      $this->dispatch('setFilePreview', filePreview: 'store--preview-1', defaultPreview: $preview);





   } // end function









   // ---------------------------------------------------------------------------








   public function update()
   {




      // 1: validation
      $this->instance->validate();






      // 1.2: uploadFile
      if ($this->instance->imageFile != $this->instance->imageFileName)
         $this->instance->imageFileName = $this->replaceFile($this->instance->imageFile, 'pickup/stores', $this->instance->imageFileName, 'STO');








      // ---------------------------------------------------
      // ---------------------------------------------------









      // 2: get instance
      $store = PickupStore::find($this->instance->id);






      // 2.1: general
      $store->title = $this->instance->title ?? null;
      $store->titleAr = $this->instance->titleAr ?? null;
      $store->information = $this->instance->information ?? null;
      $store->informationAr = $this->instance->informationAr ?? null;



      // 2.2: receivingTimes
      $store->receivingTimes = $this->instance->receivingTimes ?? null;
      $store->receivingTimesAr = $this->instance->receivingTimesAr ?? null;




      // 2.3: latitude - longitude
      $store->latitude = $this->instance->latitude ?? null;
      $store->longitude = $this->instance->longitude ?? null;




      // 2.4: isMainStore - isActive - imageFile
      $store->isMainStore = $this->instance->isMainStore ?? false;
      $store->isActive = $this->instance->isActive ?? false;

      $store->imageFile = $this->instance->imageFileName ?? null;




      $store->save();










      // 2: return
      $this->makeAlert('success', 'Store has been updated');






   } // end function









   // ---------------------------------------------------------------------------








   public function render()
   {



      // :: initTooltips
      $this->dispatch('initTooltips');



      return view('livewire.dashboard.stores.stores-edit');



   } // end function






} // end class
