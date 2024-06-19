<?php

namespace App\Livewire\Dashboard\Products\Group\Units\Components;

use App\Livewire\Forms\UnitForm;
use App\Models\Unit;
use App\Traits\HelperTrait;
use Livewire\Component;

class UnitsCreate extends Component
{


    use HelperTrait;


    // :: variables
    public UnitForm $instance;









    public function store()
    {



        // :: validation
        $this->instance->validate();




        // 1: create instance
        $unit = new Unit();






        // 1.2: general
        $unit->name = $this->instance->name ?? null;
        $unit->nameAr = $this->instance->nameAr ?? null;
        $unit->abbreviation = $this->instance->abbreviation ?? null;
        $unit->abbreviationAr = $this->instance->abbreviationAr ?? null;

        $unit->save();







        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshUnits');
        $this->dispatch('closeModal', modal: '#units-create .btn-close');

        $this->makeAlert('success', 'Unit has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.units.components.units-create');



    } // end function






} // end class
