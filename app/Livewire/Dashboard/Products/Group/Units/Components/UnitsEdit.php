<?php

namespace App\Livewire\Dashboard\Products\Group\Units\Components;

use App\Livewire\Forms\UnitForm;
use App\Models\Unit;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class UnitsEdit extends Component
{




    use HelperTrait;





    // :: variables
    public UnitForm $instance;






    #[On('editUnit')]
    public function remount($id)
    {



        // 1: get instance
        $unit = Unit::find($id);


        foreach ($unit->toArray() as $key => $value)
            $this->instance->{$key} = $value;



    } // end function








    // ---------------------------------------------------------------------------






    public function update()
    {




        // :: validation
        $this->instance->validate();





        // 1: get instance
        $unit = Unit::find($this->instance->id);






        // 1.2: general
        $unit->name = $this->instance->name ?? null;
        $unit->nameAr = $this->instance->nameAr ?? null;
        $unit->abbreviation = $this->instance->abbreviation ?? null;
        $unit->abbreviationAr = $this->instance->abbreviationAr ?? null;

        $unit->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshUnits');
        $this->dispatch('closeModal', modal: '#units-edit .btn-close');

        $this->makeAlert('success', 'Unit has been updated');







    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.products.group.units.components.units-edit');


    } // end function





} // end class
