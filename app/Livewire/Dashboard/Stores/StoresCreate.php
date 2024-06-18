<?php

namespace App\Livewire\Dashboard\Stores;

use App\Livewire\Forms\PickupStoreForm;
use App\Models\PickupStore;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoresCreate extends Component
{



    use HelperTrait;
    use WithFileUploads;


    // :: variables
    public PickupStoreForm $instance;









    public function store()
    {



        // 1: validation
        $this->instance->validate();






        // 1.2: uploadFile
        if ($this->instance->imageFile)
            $this->instance->imageFileName = $this->uploadFile($this->instance->imageFile, 'pickup/stores', 'STO');









        // ---------------------------------------------------
        // ---------------------------------------------------









        // 2: create instance
        $store = new PickupStore();






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








        // 2: reset
        $this->instance->reset();
        $this->dispatch('resetFile', file: 'store--file-1', defaultPreview: $this->getDefaultPreview());



        $this->makeAlert('success', 'Store has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.stores.stores-create');



    } // end function






} // end class
