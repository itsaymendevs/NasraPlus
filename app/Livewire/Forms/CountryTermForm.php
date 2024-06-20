<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CountryTermForm extends Form
{
    // :: variables
    #[Validate('required')]
    public $title, $titleAr, $content, $contentAr, $countryId;


    public $id;



} // end form
