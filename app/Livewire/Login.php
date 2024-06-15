<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.login')]
class Login extends Component
{



    public function render()
    {


        return view('livewire.login');


    } // end function


} // end class
