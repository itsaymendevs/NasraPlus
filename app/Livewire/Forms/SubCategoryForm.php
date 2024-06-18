<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SubCategoryForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $categoryId;


    public $id, $index;



} // end form
