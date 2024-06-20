<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CountryForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $code, $toSDG, $currency, $isServiceActive, $isOrderingActive;


    public $id;



} // end form
