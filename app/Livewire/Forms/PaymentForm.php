<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PaymentForm extends Form
{

    // :: variables
    #[Validate('required')]
    public $type, $name, $nameAr;


    public $id, $accountName, $accountNumber, $isForPickup, $isForDelivery, $isForRefund, $isActive;



} // end form
