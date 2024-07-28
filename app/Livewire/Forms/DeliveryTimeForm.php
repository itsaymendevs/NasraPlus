<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class DeliveryTimeForm extends Form
{
    // :: variables
    #[Validate('required')]
    public $content, $contentAr;


    public $id, $title, $titleAr;



} // end form
