<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CountryPhoneForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $phone, $countryId;


    public $id;



} // end form
