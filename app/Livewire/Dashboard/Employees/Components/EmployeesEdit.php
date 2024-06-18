<?php

namespace App\Livewire\Dashboard\Employees\Components;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class EmployeesEdit extends Component
{



    use HelperTrait;



    // :: variables
    public EmployeeForm $instance;







    #[On('editEmployee')]
    public function remount($id)
    {



        // 1: get instance
        $employee = Employee::find($id);


        foreach ($employee->toArray() as $key => $value)
            $this->instance->{$key} = $value;




    } // end function









    // ---------------------------------------------------------------------------









    public function update()
    {




        // :: validation
        $this->instance->validate();





        // 1: create
        $employee = Employee::find($this->instance->id);


        // 1.2: general
        $employee->name = $this->instance->name ?? null;
        $employee->nameAr = $this->instance->nameAr ?? null;
        $employee->permission = $this->instance->permission ?? null;


        $employee->save();







        // 2: reset - closeModal
        $this->instance->reset();
        $this->dispatch('refreshEmployees');
        $this->dispatch('closeModal', modal: '#employees-edit .btn-close');


        $this->makeAlert('success', 'Employee has been updated');




    } // end function







    // ---------------------------------------------------------------------------









    public function render()
    {


        return view('livewire.dashboard.employees.components.employees-edit');


    } // end function




} // end class
