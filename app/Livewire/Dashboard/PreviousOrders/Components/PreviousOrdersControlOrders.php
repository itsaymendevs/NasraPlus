<?php

namespace App\Livewire\Dashboard\PreviousOrders\Components;

use App\Models\Country;
use App\Models\GeneralSetting;
use App\Traits\HelperTrait;
use Livewire\Component;

class PreviousOrdersControlOrders extends Component
{


    use HelperTrait;


    // :: variables
    public $isOrderingActive, $isSDOrderingActive, $isIRLOrderingActive, $isUKOrderingActive;




    public function mount()
    {


        // :: init
        $this->isOrderingActive = boolval(GeneralSetting::first()->isOrderingActive);
        $this->isSDOrderingActive = boolval(Country::where('name', 'Sudan')?->first()->isOrderingActive);
        $this->isUKOrderingActive = boolval(Country::where('name', 'United Kingdom')?->first()->isOrderingActive);
        $this->isIRLOrderingActive = boolval(Country::where('name', 'Ireland')?->first()->isOrderingActive);



    } // end function









    // ---------------------------------------------------------------------------






    public function update()
    {


        // 1: updateValues




        // 1.2: generalSettings
        $generalSetting = GeneralSetting::first();

        $generalSetting->isOrderingActive = boolval($this->isOrderingActive);
        $generalSetting->save();







        // 1.3: countries
        Country::where('name', 'Sudan')->update([
            'isOrderingActive' => boolval($this->isSDOrderingActive)
        ]);



        Country::where('name', 'United Kingdom')->update([
            'isOrderingActive' => boolval($this->isUKOrderingActive)
        ]);


        Country::where('name', 'Ireland')->update([
            'isOrderingActive' => boolval($this->isIRLOrderingActive)
        ]);






        // :: alert
        $this->makeAlert('info', 'Status has been changed');



    } // end function













    // ---------------------------------------------------------------------------






    public function render()
    {

        return view('livewire.dashboard.previous-orders.components.previous-orders-control-orders');

    } // end function


} // end class
