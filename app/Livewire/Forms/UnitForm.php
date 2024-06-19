<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UnitForm extends Form
{
    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $abbreviation, $abbreviationAr;

    public $id;



} // end form

