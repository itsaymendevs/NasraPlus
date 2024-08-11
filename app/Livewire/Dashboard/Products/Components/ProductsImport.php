<?php

namespace App\Livewire\Dashboard\Products\Components;

use App\Imports\ProductImport;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ProductsImport extends Component
{

    use HelperTrait;
    use WithFileUploads;




    // :: variables
    public $excelFile, $imageFiles = [];








    public function import()
    {





        // 1: uploadFiles
        foreach ($this->imageFiles ?? [] as $imageFile) {

            $this->replaceImportFile($imageFile, 'products');

        } // end loop






        // 1.2: uploadExcel
        $status = Excel::import(new ProductImport, $this->excelFile);







        // 2: reset
        $this->excelFile = null;
        $this->imageFiles = [];

        $this->dispatch('refreshProducts');
        $this->dispatch('closeModal', modal: '#import-modal .btn-close');

        $this->makeAlert('info', 'Excel has been imported, valid products will show in the table');
        $this->render();








    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.components.products-import');


    } // end function





} // end class
