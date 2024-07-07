<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.login')]
class Login extends Component
{


    use HelperTrait;


    // :: variables
    public $name, $password;





    public function mount()
    {


        // 1: reset
        Session::forget(['employeeId', 'employeeName', 'employeeNameAr']);


    } // end function







    // --------------------------------------------------------------------









    public function check()
    {



        // 1: getEmployee
        $employee = Employee::where('name', $this->name)
            ->orWhere('nameAr', $this->name)
            ->first();






        // 1.2: isFound
        if ($employee && Hash::check($this->password, $employee->password)) {



            // 1.2.1: checkActive
            if ($employee->isActive == 0) {


                $this->makeAlert('info', 'This Account has been deactivated');

                return false;

            } // end if








            // ------------------------------------------------
            // ------------------------------------------------






            // 1.2.2: makeSessions
            Session::put('employeeId', $employee->id);
            Session::put('employeeName', $employee->name);
            Session::put('employeeNameAr', $employee->nameAr);


            return $this->redirect(route('dashboard.products'), navigate: false);





            // 1.3: isNotFound
        } else {



            $this->makeAlert('info', 'Incorrect credentials');


        } // end if






    } // end function









    // --------------------------------------------------------------------






    public function render()
    {


        return view('livewire.login');


    } // end function





} // end class
