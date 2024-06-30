<?php

namespace App\Livewire\Dashboard\Products\Group;

use App\Exports\CompanyExport;
use App\Models\Company;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Companies extends Component
{


    use HelperTrait;
    use WithPagination;




    // :: variables
    public $searchCompany;








    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editCompany', $id);



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmCompanyRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmCompanyRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Company::find($this->removeId)->delete();

            $this->makeAlert('info', 'Company has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function











    // ---------------------------------------------------------------------------









    public function export($lang = 'en')
    {


        // 1: prepExport
        $companies = Company::where('name', 'LIKE', '%' . $this->searchCompany . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchCompany . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));









        // 2: makeExport
        return Excel::download(new CompanyExport($companies), 'companies.xlsx');





    } // end function










    // ---------------------------------------------------------------------------









    #[On('refreshCompanies')]
    public function render()
    {





        // 1: dependencies
        $companies = Company::where('name', 'LIKE', '%' . $this->searchCompany . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchCompany . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));







        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.companies', compact('companies'));



    } // end function






} // end class
