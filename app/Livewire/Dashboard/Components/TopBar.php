<?php

namespace App\Livewire\Dashboard\Components;

use Livewire\Component;

class TopBar extends Component
{



    // :: variables
    public $type, $leftTitle, $leftLink, $title, $rightLink;





    public function mount($type = null, $leftTitle = 'Return', $leftLink, $title, $rightLink = null)
    {


        // 1: params
        $this->leftTitle = $leftTitle;
        $this->leftLink = $leftLink;
        $this->title = $title;
        $this->rightLink = $rightLink;
        $this->type = $type;



    } // end function








    // -------------------------------------------------------------










    public function render()
    {


        return view('livewire.dashboard.components.top-bar');

    } // end function


} // end class
