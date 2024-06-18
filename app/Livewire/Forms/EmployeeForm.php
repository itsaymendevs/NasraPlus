<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeForm extends Form
{



    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $permission;


    public $id, $password;



} // end form
