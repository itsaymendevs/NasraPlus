<?php

namespace App\Livewire\Dashboard\Products\Group;

use App\Models\Unit;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Units extends Component
{



    use HelperTrait;
    use WithPagination;




    // :: variables
    public $searchUnit;








    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editUnit', $id);



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmUnitRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmUnitRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Unit::find($this->removeId)->delete();

            $this->makeAlert('info', 'Unit has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshUnits')]
    public function render()
    {





        // 1: dependencies
        $units = Unit::where('name', 'LIKE', '%' . $this->searchUnit . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchUnit . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));







        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.units', compact('units'));



    } // end function






} // end class
