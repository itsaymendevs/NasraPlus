<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TypeForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $subCategoryId;


    public $id, $categoryId, $index;



} // end form
