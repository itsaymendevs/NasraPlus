<?php

namespace App\Livewire\Dashboard\Help\Group;

use App\Models\Country;
use Livewire\Component;

class Contact extends Component
{




    // :: variables
    public $country;



    public function mount($id)
    {


        // 1: get instance
        $this->country = Country::find($id);


    } // end function









    // ---------------------------------------------------------------------------









    public function render()
    {


        return view('livewire.dashboard.help.group.contact');


    } // end function




} // end class
