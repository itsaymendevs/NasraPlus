<?php

namespace App\Livewire\Dashboard\Help\Group\Advertisements\Components;

use App\Livewire\Forms\AdvertisementForm;
use App\Models\Advertisement;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdvertisementsSquares extends Component
{



    use HelperTrait;
    use WithFileUploads;
    use WithPagination;



    // :: variables
    public AdvertisementForm $instance;






    public function mount()
    {



        // 1: init instance
        $this->instance->type = 'Square';
        $this->instance->isActive = true;





    } // end function







    // ---------------------------------------------------------------------------






    public function store()
    {



        // :: validation
        $this->instance->validate();




        // 1: uploadFile
        if ($this->instance->imageFile)
            $this->instance->imageFileName = $this->uploadFile($this->instance->imageFile, 'help/ads', 'SQU');



        if ($this->instance->imageFileAr)
            $this->instance->imageFileNameAr = $this->uploadFile($this->instance->imageFileAr, 'help/ads', 'SQU');






        // ---------------------------------------------
        // ---------------------------------------------






        // 2: get instance
        $ad = new Advertisement();




        // 2.1: general
        $ad->type = $this->instance->type ?? null;
        $ad->name = $this->instance->name ?? null;
        $ad->nameAr = $this->instance->name ?? null;
        $ad->isActive = $this->instance->isActive ?? false;




        // 2.2: imageFile
        $ad->imageFile = $this->instance->imageFileName ?? null;
        $ad->imageFileAr = $this->instance->imageFileNameAr ?? null;


        $ad->save();






        // 3: reset
        $this->instance->reset();
        $this->instance->type = 'Square';
        $this->instance->isActive = true;

        $this->dispatch('resetFile', file: 'square--file-1', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('resetFile', file: 'square--file-2', defaultPreview: $this->getDefaultPreview());
        $this->makeAlert('success', 'Advertisement has been created');
        $this->render();



    } // end function














    // ---------------------------------------------------------------------------






    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editSquare', $id);



    } // end function








    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmSquareRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmSquareRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            Advertisement::find($this->removeId)->delete();

            $this->makeAlert('info', 'Advertisement has been removed');


        } // end if





        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------









    #[On('refreshSquares')]
    public function render()
    {


        // 1: dependencies
        $ads = Advertisement::where('type', 'Square')
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XL'), pageName: 'squares');





        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.group.advertisements.components.advertisements-squares', compact('ads'));


    } // end function



} // end class
