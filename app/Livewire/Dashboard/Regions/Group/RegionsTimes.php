<?php

namespace App\Livewire\Dashboard\Regions\Group;

use App\Livewire\Forms\DeliveryTimeForm;
use App\Models\DeliveryTime;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class RegionsTimes extends Component
{






    use HelperTrait;
    use WithPagination;



    // :: variables
    public DeliveryTimeForm $instance;










    public function store()
    {




        // 1: create instance
        $deliveryTime = new DeliveryTime();



        // 1.2: general
        $deliveryTime->title = $this->instance->title ?? null;
        $deliveryTime->titleAr = $this->instance->titleAr ?? null;
        $deliveryTime->content = $this->instance->content ?? null;
        $deliveryTime->contentAr = $this->instance->contentAr ?? null;



        $deliveryTime->save();








        // 2: reset
        $this->instance->reset();
        $this->makeAlert('success', 'Timing has been created');






    } // end function









    // ---------------------------------------------------------------------------






    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editDeliveryTime', $id);



    } // end function














    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmDeliveryTimeRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmDeliveryTimeRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            DeliveryTime::find($this->removeId)->delete();

            $this->makeAlert('info', 'Timing has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshDeliveryTimes')]
    public function render()
    {





        // 1: dependencies
        $deliveryTimes = DeliveryTime::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));






        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.regions.group.regions-times', compact('deliveryTimes'));



    } // end function






} // end class
