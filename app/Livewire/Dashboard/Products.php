<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Products extends Component
{




    public function render()
    {





        // :: tooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.products');


    } // end function

} // end class
