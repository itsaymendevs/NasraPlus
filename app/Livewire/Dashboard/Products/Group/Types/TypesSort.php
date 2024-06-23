<?php

namespace App\Livewire\Dashboard\Products\Group\Types;

use App\Models\Type;
use App\Traits\HelperTrait;
use Livewire\Component;

class TypesSort extends Component
{


    use HelperTrait;


    // :: variables
    public $types;






    public function mount($id)
    {


        // 1: dependencies
        $this->types = Type::where('subCategoryId', $id)->orderBy('index')->get();



    } // end function







    // ---------------------------------------------------------------------------








    public function update($list)
    {



        // 1: loop - list
        foreach ($list ?? [] as $key => $typeId) {


            // 1.2: update index
            $type = Type::find($typeId);

            $type->index = $key + 1;
            $type->save();


        } // end loop




        $this->alert('info', 'Types has been sorted');


    } // end function







    // ---------------------------------------------------------------------------





    public function render()
    {


        return view('livewire.dashboard.products.group.types.types-sort');


    } // end function






} // end class
