<?php

namespace App\Livewire\Dashboard\Help\Components;

use App\Livewire\Forms\AddressForm;
use App\Models\AddressInformation;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class HelpAddress extends Component
{


   use HelperTrait;
   use WithFileUploads;




   // :: variables
   public AddressForm $instance;






   public function mount()
   {



      // 1: get instance
      $addressDetail = AddressInformation::first();

      foreach ($addressDetail->toArray() as $key => $value)
         $this->instance->{$key} = $value;



      // 1.2 imageFile - convertBoolean
      $this->instance->imageFileName = $this->instance->imageFile ?? null;
      $this->instance->isActive = boolval($this->instance->isActive);








      // -------------------------------------
      // -------------------------------------







      // 2: setFilePreview
      $preview = $this->instance->imageFile ?
         url('storage/help/addresses/' . $this->instance->imageFile) : $this->getDefaultPreview();

      $this->dispatch('setFilePreview', filePreview: 'address--preview', defaultPreview: $preview);





   } // end function







   // ---------------------------------------------------------------------------






   public function update()
   {





      // 1: uploadFile
      if ($this->instance->imageFile)
         $this->instance->imageFileName = $this->uploadFile($this->instance->imageFile, 'help/addresses', 'ADR');








      // ---------------------------------------------
      // ---------------------------------------------







      // 2: get instance
      $address = AddressInformation::first();




      // 2.1: general
      $address->address = $this->instance->address ?? null;
      $address->latitude = $this->instance->latitude ?? null;
      $address->longitude = $this->instance->longitude ?? null;
      $address->isActive = $this->instance->isActive ?? false;



      // 2.2: imageFile
      $address->imageFile = $this->instance->imageFileName ?? null;


      $address->save();





      $this->makeAlert('success', 'Information has been updated');




   } // end function





   // ---------------------------------------------------------------------------








   public function render()
   {





      // :: initTooltips
      $this->dispatch('initTooltips');


      return view('livewire.dashboard.help.components.help-address');


   } // end function



} // end class
