<?php

namespace App\Livewire\Dashboard\Components;

use App\Models\Country;
use Livewire\Component;

class SideBar extends Component
{



    // :: variables
    public $countries;




    public function mount()
    {


        // 1: get instance
        $this->countries = Country::all();


    } // end function








    // ---------------------------------------------------------------------------





    public function render()
    {


        return view('livewire.dashboard.components.side-bar');


    } // end function


} // end class
