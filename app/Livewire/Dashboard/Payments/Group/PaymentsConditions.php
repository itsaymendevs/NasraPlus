<?php

namespace App\Livewire\Dashboard\Payments\Group;

use App\Livewire\Forms\ConditionForm;
use App\Models\PaymentCondition;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PaymentsConditions extends Component
{





    use HelperTrait;
    use WithPagination;



    // :: variables
    public ConditionForm $instance;










    public function store()
    {




        // 1: create instance
        $condition = new PaymentCondition();



        // 1.2: general
        $condition->title = $this->instance->title ?? null;
        $condition->titleAr = $this->instance->titleAr ?? null;
        $condition->content = $this->instance->content ?? null;
        $condition->contentAr = $this->instance->contentAr ?? null;



        $condition->save();








        // 2: reset
        $this->instance->reset();
        $this->makeAlert('success', 'Condition has been created');






    } // end function









    // ---------------------------------------------------------------------------






    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editCondition', $id);



    } // end function














    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmConditionRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmConditionRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            PaymentCondition::find($this->removeId)->delete();

            $this->makeAlert('info', 'Condition has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshConditions')]
    public function render()
    {





        // 1: dependencies
        $conditions = PaymentCondition::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));






        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.payments.group.payments-conditions', compact('conditions'));



    } // end function






} // end class
