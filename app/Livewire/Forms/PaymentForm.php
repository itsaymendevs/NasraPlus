<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PaymentForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $type, $name, $nameAr, $accountName, $accountNumber;


    public $id, $isForPickup, $isForDelivery, $isForRefund, $isActive;



} // end form
