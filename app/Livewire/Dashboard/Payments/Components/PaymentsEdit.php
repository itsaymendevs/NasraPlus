<?php

namespace App\Livewire\Dashboard\Payments\Components;

use App\Livewire\Forms\PaymentForm;
use App\Models\Payment;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class PaymentsEdit extends Component
{



    use HelperTrait;




    // :: variables
    public PaymentForm $instance;






    #[On('editPayment')]
    public function remount($id)
    {



        // 1: get instance
        $payment = Payment::find($id);

        foreach ($payment->toArray() as $key => $value)
            $this->instance->{$key} = $value;





        // 1.2: convertToBool
        $this->instance->isForRefund = boolval($this->instance->isForRefund);
        $this->instance->isForDelivery = boolval($this->instance->isForDelivery);
        $this->instance->isForPickup = boolval($this->instance->isForPickup);







        // 1.3: setSelect
        $this->dispatch('setSelect', id: '#type-select-2', value: $this->instance->type);



    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $payment = Payment::find($this->instance->id);



        // 1.2: general
        $payment->type = $this->instance->type ?? null;
        $payment->name = $this->instance->name ?? null;
        $payment->nameAr = $this->instance->nameAr ?? null;
        $payment->accountName = $this->instance->accountName ?? null;
        $payment->accountNumber = $this->instance->accountNumber ?? false;






        // 1.3: isFor
        $payment->isForDelivery = $this->instance->isForDelivery ?? false;
        $payment->isForPickup = $this->instance->isForPickup ?? false;
        $payment->isForRefund = $this->instance->isForRefund ?? false;



        $payment->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('resetModalSelect');
        $this->dispatch('refreshPayments');
        $this->dispatch('closeModal', modal: '#payments-edit .btn-close');




        $this->makeAlert('success', 'Method has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {



        // 1: dependencies
        $types = ['Direct Payment', 'At Receiving Payment', 'Online Banking Payment'];




        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.payments.components.payments-edit', compact('types'));


    } // end function





} // end class
