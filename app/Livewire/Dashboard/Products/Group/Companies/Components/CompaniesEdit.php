<?php

namespace App\Livewire\Dashboard\Products\Group\Companies\Components;

use App\Livewire\Forms\CompanyForm;
use App\Models\Company;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class CompaniesEdit extends Component
{


    use HelperTrait;





    // :: variables
    public CompanyForm $instance;






    #[On('editCompany')]
    public function remount($id)
    {



        // 1: get instance
        $company = Company::find($id);


        foreach ($company->toArray() as $key => $value)
            $this->instance->{$key} = $value;



    } // end function








    // ---------------------------------------------------------------------------






    public function update()
    {




        // :: validation
        $this->instance->validate();





        // 1: get instance
        $company = Company::find($this->instance->id);






        // 1.2: general
        $company->name = $this->instance->name ?? null;
        $company->nameAr = $this->instance->nameAr ?? null;


        $company->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshCompanies');
        $this->dispatch('closeModal', modal: '#companies-edit .btn-close');

        $this->makeAlert('success', 'Company has been updated');







    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.products.group.companies.components.companies-edit');


    } // end function





} // end class
