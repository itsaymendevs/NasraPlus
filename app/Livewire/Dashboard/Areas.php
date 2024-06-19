<?php

namespace App\Livewire\Dashboard;

use App\Models\DeliveryArea;
use App\Models\GeneralSetting;
use App\Models\State;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Areas extends Component
{



    use HelperTrait;
    use WithPagination;




    // :: variables
    public $searchState, $searchStatus;
    public $isDeliveryActive;







    public function toggleDelivery()
    {



        // 1: get instance
        $generalSettings = GeneralSetting::first();





        // 1.2: toggleDelivery
        $generalSettings->isDeliveryActive = $this->isDeliveryActive;
        $generalSettings->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function














    // ---------------------------------------------------------------------------









    public function toggleActive($id)
    {



        // 1: get instance
        $area = DeliveryArea::find($id);




        // 1.2: toggleActive
        $area->isActive = ! $area->isActive;
        $area->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmAreaRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmAreaRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            DeliveryArea::find($this->removeId)->delete();

            $this->makeAlert('info', 'Area has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshAreas')]
    public function render()
    {





        // 1: dependencies
        $states = State::all();
        $this->isDeliveryActive = boolval(GeneralSetting::first()->isDeliveryActive);


        $areas = DeliveryArea::orderBy('created_at', 'desc')
            ->whereIn('stateId', $this->searchState ? [$this->searchState] : $states?->pluck('id')?->toArray() ?? [])
            ->whereIn('isActive', $this->searchStatus ? [$this->searchStatus] : [1, 0])
            ->paginate(env('PAGINATE_XXL'));









        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.areas', compact('areas', 'states'));



    } // end function






} // end class
