<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form
{
    // :: variables
    #[Validate('required')]
    public $name, $nameAr;

    public $id;



} // end form

