<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AdvertisementForm extends Form
{
    // :: variables
    #[Validate('required')]
    public $name, $type, $imageFile, $imageFileAr;


    public $id, $nameAr, $isActive;


    // :: helpers
    public $imageFileName, $imageFileNameAr;



} // end form
