<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Employees extends Component
{



    use HelperTrait;
    use WithPagination;



    // :: variables
    public EmployeeForm $instance;






    public function store()
    {




        // :: validation
        $this->instance->validate();





        // 1: create
        $employee = new Employee();


        // 1.2: general
        $employee->name = $this->instance->name;
        $employee->nameAr = $this->instance->nameAr;
        $employee->permission = $this->instance->permission;




        // 1.3: makePassword
        $employee->password = Hash::make($this->instance->password);

        $employee->save();







        // 2: reset
        $this->instance->reset();
        $this->makeAlert('success', 'Employee has been created');




    } // end function







    // ---------------------------------------------------------------------------






    public function edit($id)
    {



        // 1: dispatchEvent
        $this->dispatch('editEmployee', $id);



    } // end function







    // ---------------------------------------------------------------------------






    public function resetPassword($id)
    {



        // 1: dispatchEvent
        $this->dispatch('resetEmployeePassword', $id);



    } // end function







    // ---------------------------------------------------------------------------








    public function toggleActive($id)
    {



        // 1: get instance
        $employee = Employee::find($id);




        // 1.2: toggleActive
        $employee->isActive = ! $employee->isActive;
        $employee->save();





        $this->makeAlert('info', 'Status has been updated');
        $this->render();



    } // end function










    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmEmployeeRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmEmployeeRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Employee::find($this->removeId)->delete();

            $this->makeAlert('info', 'Employee has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------











    #[On('refreshEmployees')]
    public function render()
    {



        // 1: dependencies
        $employees = Employee::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));







        // :: init
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.employees', compact('employees'));


    } // end function








} // end class
