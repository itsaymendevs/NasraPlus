<?php

namespace App\Livewire\Dashboard\Stores\Group\StoresConditions\Components;

use App\Livewire\Forms\ConditionForm;
use App\Models\PickupCondition;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class StoresConditionsEdit extends Component
{



    use HelperTrait;




    // :: variables
    public ConditionForm $instance;






    #[On('editCondition')]
    public function remount($id)
    {



        // 1: get instance
        $condition = PickupCondition::find($id);

        foreach ($condition->toArray() as $key => $value)
            $this->instance->{$key} = $value;



    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $condition = PickupCondition::find($this->instance->id);




        // 1.2: general
        $condition->title = $this->instance->title ?? null;
        $condition->titleAr = $this->instance->titleAr ?? null;
        $condition->content = $this->instance->content ?? null;
        $condition->contentAr = $this->instance->contentAr ?? null;



        $condition->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshConditions');
        $this->dispatch('closeModal', modal: '#conditions-edit .btn-close');




        $this->makeAlert('success', 'Condition has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {




        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.stores.group.stores-conditions.components.stores-conditions-edit');



    } // end function





} // end class
