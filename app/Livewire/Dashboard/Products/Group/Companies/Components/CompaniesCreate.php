<?php

namespace App\Livewire\Dashboard\Products\Group\Companies\Components;

use App\Livewire\Forms\CompanyForm;
use App\Models\Company;
use App\Traits\HelperTrait;
use Livewire\Component;

class CompaniesCreate extends Component
{



    use HelperTrait;


    // :: variables
    public CompanyForm $instance;









    public function store()
    {



        // :: validation
        $this->instance->validate();




        // 1: create instance
        $company = new Company();






        // 1.2: general
        $company->name = $this->instance->name ?? null;
        $company->nameAr = $this->instance->nameAr ?? null;


        $company->save();







        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshCompanies');
        $this->dispatch('closeModal', modal: '#companies-create .btn-close');

        $this->makeAlert('success', 'Company has been created');






    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.companies.components.companies-create');



    } // end function






} // end class
