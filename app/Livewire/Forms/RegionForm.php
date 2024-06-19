<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegionForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $name, $nameAr, $stateId, $deliveryTimeId, $price;


    public $id, $isActive;



} // end form
