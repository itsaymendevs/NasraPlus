<?php

namespace App\Livewire\Dashboard\Products\Group;

use App\Exports\CategoryExport;
use App\Livewire\Forms\CategoryPictureForm;
use App\Models\Category;
use App\Models\CategoryPicture;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Categories extends Component
{


    use HelperTrait;
    use WithPagination;
    use WithFileUploads;





    // :: variables
    public CategoryPictureForm $instance;
    public $searchCategory;






    public function mount()
    {



        // 1: get instance
        $categoryPicture = CategoryPicture::first();


        foreach ($categoryPicture->toArray() as $key => $value)
            $this->instance->{$key} = $value;




        // 1.2: cloneFiles
        $this->instance->imageFileName = $this->instance->imageFile ?? null;
        $this->instance->imageFileNameAr = $this->instance->imageFileAr ?? null;











        // -----------------------------------
        // -----------------------------------






        // 2: setFilePreview
        $preview = $this->instance->imageFile ?
            url('storage/categories/covers/' . $this->instance->imageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'cover--preview-1', defaultPreview: $preview);


        $preview = $this->instance->imageFileAr ?
            url('storage/categories/covers/' . $this->instance->imageFileAr) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'cover--preview-2', defaultPreview: $preview);








    } // end function









    // ---------------------------------------------------------------------------







    public function export($lang = 'en')
    {


        // 1: prepExport
        $categories = Category::where('name', 'LIKE', '%' . $this->searchCategory . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchCategory . '%')
            ->orderBy('index', 'asc')
            ->paginate(env('PAGINATE_XXL'));







        // 2: makeExport
        return Excel::download(new CategoryExport($categories), 'categories.xlsx');





    } // end function











    // ---------------------------------------------------------------------------










    public function updateCover()
    {





        // 1.2: uploadFile
        if ($this->instance->imageFile != $this->instance->imageFileName)
            $this->instance->imageFileName = $this->replaceFile($this->instance->imageFile, 'categories/covers', $this->instance->imageFileName, 'STO');



        // 1.3: uploadFile
        if ($this->instance->imageFileAr != $this->instance->imageFileNameAr)
            $this->instance->imageFileNameAr = $this->replaceFile($this->instance->imageFileAr, 'categories/covers', $this->instance->imageFileNameAr, 'STO');









        // ---------------------------------------------------
        // ---------------------------------------------------









        // 2: create instance
        $categoryPicture = CategoryPicture::first();






        // 2.1: general
        $categoryPicture->imageFile = $this->instance->imageFileName ?? null;
        $categoryPicture->imageFileAr = $this->instance->imageFileNameAr ?? null;


        $categoryPicture->save();








        // :: alert
        $this->makeAlert('success', 'Covers has been updated');








    } // end function











    // ---------------------------------------------------------------------------
    // ---------------------------------------------------------------------------
    // ---------------------------------------------------------------------------
    // ---------------------------------------------------------------------------
    // ---------------------------------------------------------------------------










    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editCategory', $id);



    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmCategoryRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmCategoryRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Category::find($this->removeId)->delete();

            $this->makeAlert('info', 'Category has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshCategories')]
    public function render()
    {





        // 1: dependencies
        $categories = Category::where('name', 'LIKE', '%' . $this->searchCategory . '%')
            ->orWhere('nameAr', 'LIKE', '%' . $this->searchCategory . '%')
            ->orderBy('index', 'asc')
            ->paginate(env('PAGINATE_XXL'));







        // :: initTooltips
        $this->dispatch('initTooltips');



        return view('livewire.dashboard.products.group.categories', compact('categories'));



    } // end function






} // end class
