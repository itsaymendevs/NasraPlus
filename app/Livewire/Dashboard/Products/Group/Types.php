<?php

namespace App\Livewire\Dashboard\Products\Group;

use App\Exports\TypeExport;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Type;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Types extends Component
{


    use HelperTrait;
    use WithPagination;





    // :: variables
    public $searchSubCategory;







    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editType', $id);



    } // end function











    // ---------------------------------------------------------------------------







    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmTypeRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmTypeRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Type::find($this->removeId)->delete();

            $this->makeAlert('info', 'Type has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function











    // ---------------------------------------------------------------------------







    public function export($lang = 'en')
    {


        // 1: prepExport
        $types = Type::all();


        $filteredTypes = $types->filter(function ($item) {


            $toReturn = true;


            // 1: subCategory
            $this->searchSubCategory ? $item?->subCategoryId != $this->searchSubCategory ? $toReturn = false : null : null;


            return $toReturn;

        });





        // 1.3: getTypes - filtered
        $types = Type::whereIn('id', $filteredTypes?->pluck('id')?->toArray() ?? [])
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));











        // 2: makeExport
        return Excel::download(new TypeExport($types), 'types.xlsx');





    } // end function








    // ---------------------------------------------------------------------------









    #[On('refreshTypes')]
    public function render()
    {



        // 1: dependencies
        $categories = Category::all();
        $subCategories = SubCategory::all();






        // -------------------------------------
        // -------------------------------------





        // 1.2: types
        $types = Type::all();


        $filteredTypes = $types->filter(function ($item) {


            $toReturn = true;


            // 1: subCategory
            $this->searchSubCategory ? $item?->subCategoryId != $this->searchSubCategory ? $toReturn = false : null : null;


            return $toReturn;

        });





        // 1.3: getTypes - filtered
        $types = Type::whereIn('id', $filteredTypes?->pluck('id')?->toArray() ?? [])
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));












        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.types', compact('categories', 'subCategories', 'types'));



    } // end function






} // end class
