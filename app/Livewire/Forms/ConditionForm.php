<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ConditionForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $title, $titleAr, $content, $contentAr;


    public $id;



} // end form
