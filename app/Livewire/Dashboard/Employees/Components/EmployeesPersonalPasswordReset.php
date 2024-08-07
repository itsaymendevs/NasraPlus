<?php

namespace App\Livewire\Dashboard\Employees\Components;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;

class EmployeesPersonalPasswordReset extends Component
{



    use HelperTrait;



    // :: variables
    public EmployeeForm $instance;
    public $password, $newPassword;





    #[On('resetPersonalEmployeePassword')]
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


        // 1: checkEmployee
        $employee = Employee::find($this->instance->id)->first();





        // 1.2: correct
        if (Hash::check($this->password, $employee->password)) {




            // 1.3: updatePassword
            $employee = Employee::find($this->instance->id);

            $employee->password = Hash::make($this->newPassword);
            $employee->save();




            // 1.4: reset
            $this->instance->reset();
            $this->password = null;
            $this->newPassword = null;

            $this->dispatch('closeModal', modal: '#employees-personal-password-reset .btn-close');
            $this->makeAlert('success', 'Password has been updated');






            // 1.2: mismatched
        } else {



            $this->makeAlert('info', 'Password is incorrect');


        } // end if





    } // end function











    // ---------------------------------------------------------------------------








    public function render()
    {

        return view('livewire.dashboard.employees.components.employees-personal-password-reset');


    } // end function





} // end class
