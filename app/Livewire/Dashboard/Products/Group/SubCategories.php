<?php

namespace App\Livewire\Dashboard\Products\Group;

use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class SubCategories extends Component
{


    use HelperTrait;
    use WithPagination;





    // :: variables
    public $searchCategory;







    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editSubCategory', $id);



    } // end function











    // ---------------------------------------------------------------------------







    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmSubCategoryRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmSubCategoryRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            SubCategory::find($this->removeId)->delete();

            $this->makeAlert('info', 'Category has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshSubCategories')]
    public function render()
    {



        // 1: dependencies
        $categories = Category::all();





        // 1.2: subCategories
        if ($this->searchCategory) {

            $subCategories = SubCategory::where('categoryId', $this->searchCategory)
                ->orderBy('created_at', 'desc')
                ->paginate(env('PAGINATE_XXL'));


        } else {

            $subCategories = SubCategory::orderBy('created_at', 'desc')
                ->paginate(env('PAGINATE_XXL'));

        } // end if








        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.sub-categories', compact('categories', 'subCategories'));



    } // end function






} // end class
