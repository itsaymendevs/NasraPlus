<?php

namespace App\Livewire\Dashboard\Regions\Group\RegionsTimes\Components;

use App\Livewire\Forms\DeliveryTimeForm;
use App\Models\DeliveryTime;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class RegionsTimesEdit extends Component
{





    use HelperTrait;




    // :: variables
    public DeliveryTimeForm $instance;






    #[On('editDeliveryTime')]
    public function remount($id)
    {



        // 1: get instance
        $deliveryTime = DeliveryTime::find($id);

        foreach ($deliveryTime->toArray() as $key => $value)
            $this->instance->{$key} = $value;



    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $deliveryTime = DeliveryTime::find($this->instance->id);




        // 1.2: general
        $deliveryTime->title = $this->instance->title ?? null;
        $deliveryTime->titleAr = $this->instance->titleAr ?? null;
        $deliveryTime->content = $this->instance->content ?? null;
        $deliveryTime->contentAr = $this->instance->contentAr ?? null;



        $deliveryTime->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshDeliveryTimes');
        $this->dispatch('closeModal', modal: '#times-edit .btn-close');




        $this->makeAlert('success', 'Timing has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {




        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.regions.group.regions-times.components.regions-times-edit');



    } // end function





} // end class
