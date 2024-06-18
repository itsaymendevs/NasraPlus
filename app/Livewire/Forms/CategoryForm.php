<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $imageFile;


    public $id, $index;


    // :: helpers
    public $imageFileName;



} // end form
