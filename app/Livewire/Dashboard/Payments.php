<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\PaymentForm;
use App\Models\Payment;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{



    use HelperTrait;
    use WithPagination;



    // :: variables
    public PaymentForm $instance;










    public function store()
    {




        // 1: create instance
        $payment = new Payment();



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
        $this->dispatch('resetSelect');

        $this->makeAlert('success', 'Method has been created');






    } // end function









    // ---------------------------------------------------------------------------






    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editPayment', $id);



    } // end function










    // ---------------------------------------------------------------------------








    public function toggleActive($id)
    {



        // 1: get instance
        $payment = Payment::find($id);




        // 1.2: toggleActive
        $payment->isActive = ! $payment->isActive;
        $payment->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmPaymentRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmPaymentRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Payment::find($this->removeId)->delete();

            $this->makeAlert('info', 'Method has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshPayments')]
    public function render()
    {





        // 1: dependencies
        $types = ['Direct Payment', 'At Receiving Payment', 'Online Banking Payment'];

        $payments = Payment::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));






        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.payments', compact('payments', 'types'));



    } // end function






} // end class
