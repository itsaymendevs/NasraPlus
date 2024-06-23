<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class MessageForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $type, $isFor;

    public $id, $content, $contentAr, $isActive, $target;



} // end form
