<?php

namespace App\Livewire\Dashboard;

use App\Models\DeliveryRegion;
use App\Models\GeneralSetting;
use App\Models\State;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Regions extends Component
{



    use HelperTrait;
    use WithPagination;




    // :: variables
    public $searchState, $searchStatus, $searchRegion;
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
        $region = DeliveryRegion::find($id);




        // 1.2: toggleActive
        $region->isActive = ! $region->isActive;
        $region->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmRegionRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmRegionRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            DeliveryRegion::find($this->removeId)->delete();

            $this->makeAlert('info', 'Region has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshRegions')]
    public function render()
    {





        // 1: dependencies
        $states = State::all();
        $this->isDeliveryActive = boolval(GeneralSetting::first()->isDeliveryActive);


        $regions = DeliveryRegion::orderBy('created_at', 'desc')
            ->where('name', 'LIKE', '%' . $this->searchRegion . '%')
            ->whereIn('stateId', $this->searchState ? [$this->searchState] : $states?->pluck('id')?->toArray() ?? [])
            ->whereIn('isActive', $this->searchStatus ? [$this->searchStatus == "true" ? true : false] : [1, 0])
            ->paginate(env('PAGINATE_XXL'));









        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.regions', compact('regions', 'states'));



    } // end function






} // end class
