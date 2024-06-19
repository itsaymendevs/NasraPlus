<?php

namespace App\Livewire\Dashboard\Regions;

use App\Livewire\Forms\RegionForm;
use App\Models\DeliveryRegion;
use App\Models\DeliveryTime;
use App\Models\State;
use App\Traits\HelperTrait;
use Livewire\Component;

class RegionsCreate extends Component
{


    use HelperTrait;


    // :: variables
    public RegionForm $instance;









    public function store()
    {



        // :: validation
        $this->instance->validate();




        // 1: create instance
        $region = new DeliveryRegion();






        // 1.2: general
        $region->name = $this->instance->name ?? null;
        $region->nameAr = $this->instance->nameAr ?? null;
        $region->price = $this->instance->price ?? null;



        // 2.3: state - deliveryTime
        $region->stateId = $this->instance->stateId ?? null;
        $region->deliveryTimeId = $this->instance->deliveryTimeId ?? null;




        // 2.4: isActive
        $region->isActive = $this->instance->isActive ?? false;

        $region->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('resetSelect');
        $this->makeAlert('success', 'Region has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // 1: dependencies
        $deliveryTimes = DeliveryTime::all();
        $states = State::all();







        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.regions.regions-create', compact('deliveryTimes', 'states'));



    } // end function






} // end class
