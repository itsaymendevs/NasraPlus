<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PickupStoreForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $title, $titleAr, $information, $informationAr, $receivingTimes, $receivingTimesAr, $imageFile;


    public $id, $latitude, $longitude, $isMainStore, $isActive;




    // :: helpers
    public $imageFileName;


} // end form
