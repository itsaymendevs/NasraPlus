<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AddressForm extends Form
{


    // :: variables
    public $address, $latitude, $longitude, $imageFile;


    public $id, $isActive;


    // :: helpers
    public $imageFileName;



} // end form
