<?php

namespace App\Livewire\Dashboard;

use App\Models\GeneralSetting;
use App\Models\PickupStore;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Stores extends Component
{


    use HelperTrait;
    use WithPagination;




    // :: variables
    public $isPickupActive;







    public function togglePickup()
    {



        // 1: get instance
        $generalSettings = GeneralSetting::first();





        // 1.2: togglePickup
        $generalSettings->isPickupActive = $this->isPickupActive;
        $generalSettings->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function














    // ---------------------------------------------------------------------------









    public function toggleActive($id)
    {



        // 1: get instance
        $store = PickupStore::find($id);




        // 1.2: toggleActive
        $store->isActive = ! $store->isActive;
        $store->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmStoreRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmStoreRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            PickupStore::find($this->removeId)->delete();

            $this->makeAlert('info', 'Store has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshStores')]
    public function render()
    {





        // 1: dependencies
        $this->isPickupActive = boolval(GeneralSetting::first()->isPickupActive);

        $stores = PickupStore::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));









        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.stores', compact('stores'));



    } // end function






} // end class
