<?php

namespace App\Livewire\Dashboard\Regions;

use App\Livewire\Forms\RegionForm;
use App\Models\DeliveryRegion;
use App\Models\DeliveryTime;
use App\Models\State;
use App\Traits\HelperTrait;
use Livewire\Component;

class RegionsEdit extends Component
{


    use HelperTrait;


    // :: variables
    public RegionForm $instance;









    public function mount($id)
    {



        // 1: get instance
        $region = DeliveryRegion::find($id);

        foreach ($region->toArray() as $key => $value)
            $this->instance->{$key} = $value;




        // 1.2: convertBoolean
        $this->instance->isActive = boolval($this->instance->isActive);




    } // end function









    // ---------------------------------------------------------------------------








    public function update()
    {




        // :: validation
        $this->instance->validate();




        // 1: get instance
        $region = DeliveryRegion::find($this->instance->id);




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





        // 2: return
        $this->makeAlert('success', 'Region has been updated');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $deliveryTimes = DeliveryTime::all();
        $states = State::all();






        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.regions.regions-edit', compact('deliveryTimes', 'states'));



    } // end function






} // end class
