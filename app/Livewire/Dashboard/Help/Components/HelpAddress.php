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




    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $address = AddressInformation::first();



        // 1.2: general
        $address->address = $this->instance->address ?? null;
        $address->latitude = $this->instance->latitude ?? null;
        $address->longitude = $this->instance->longitude ?? null;
        $address->isActive = $this->instance->isActive ?? false;



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
