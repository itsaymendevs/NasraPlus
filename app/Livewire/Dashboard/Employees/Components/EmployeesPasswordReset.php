<?php

namespace App\Livewire\Dashboard\Employees\Components;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class EmployeesPasswordReset extends Component
{


    use HelperTrait;



    // :: variables
    public EmployeeForm $instance;






    #[On('resetEmployeePassword')]
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




    } // end function











    // ---------------------------------------------------------------------------








    public function render()
    {

        return view('livewire.dashboard.employees.components.employees-password-reset');


    } // end function





} // end class
