<?php

namespace App\Livewire\Dashboard\Help\Group\Contact\Components;

use App\Livewire\Forms\CountryForm;
use App\Models\Country;
use App\Traits\HelperTrait;
use Livewire\Component;

class ContactService extends Component
{


    use HelperTrait;


    // :: variables
    public CountryForm $instance;






    public function mount($id)
    {



        // 1: get instance
        $country = Country::find($id);

        foreach ($country->toArray() as $key => $value)
            $this->instance->{$key} = $value;




        // 1.2: convertBoolean
        $this->instance->isServiceActive = boolval($this->instance->isServiceActive);






    } // end function










    // ---------------------------------------------------------------------------







    public function toggleService()
    {



        // 1: get instance
        $country = Country::find($this->instance->id);




        // 1.2: toggleActive
        $country->isServiceActive = ! $country->isServiceActive;
        $country->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function









    // ---------------------------------------------------------------------------







    public function updateToSDG()
    {



        // 1: get instance
        $country = Country::find($this->instance->id);




        // 1.2: update
        $country->toSDG = doubleval($this->instance->toSDG ?? 0);
        $country->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function










    // ---------------------------------------------------------------------------








    public function render()
    {


        return view('livewire.dashboard.help.group.contact.components.contact-service');


    } // end function



} // end class
