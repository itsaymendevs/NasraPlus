<?php

namespace App\Livewire\Dashboard\Help\Group\Advertisements\Components;

use App\Livewire\Forms\AdvertisementForm;
use App\Models\Advertisement;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdvertisementsSquaresEdit extends Component
{



    use HelperTrait;
    use WithFileUploads;



    // :: variables
    public AdvertisementForm $instance;






    #[On('editSquare')]
    public function remount($id)
    {



        // 1: get instance
        $ad = Advertisement::find($id);

        foreach ($ad->toArray() as $key => $value)
            $this->instance->{$key} = $value;




        // 1.2: setFiles - convertBoolean
        $this->instance->isActive = boolval($this->instance->isActive);
        $this->instance->imageFileName = $this->instance->imageFile ?? null;
        $this->instance->imageFileNameAr = $this->instance->imageFileAr ?? null;







        // -----------------------------------
        // -----------------------------------






        // 2: setFilePreview
        $preview = $this->instance->imageFile ?
            asset('storage/help/ads/' . $this->instance->imageFile) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'square--preview-3', defaultPreview: $preview);




        $preview = $this->instance->imageFileAr ?
            asset('storage/help/ads/' . $this->instance->imageFileAr) : $this->getDefaultPreview();

        $this->dispatch('setFilePreview', filePreview: 'square--preview-4', defaultPreview: $preview);






    } // end function







    // ---------------------------------------------------------------------------








    public function update()
    {



        // :: validation
        $this->instance->validate();




        // 1: replaceFile
        if ($this->instance->imageFile != $this->instance->imageFileName)
            $this->instance->imageFileName = $this->replaceFile($this->instance->imageFile, 'help/ads', $this->instance->imageFileName, 'SQU');



        if ($this->instance->imageFileAr != $this->instance->imageFileNameAr)
            $this->instance->imageFileNameAr = $this->replaceFile($this->instance->imageFileAr, 'help/ads', $this->instance->imageFileNameAr, 'SQU');







        // ---------------------------------------------
        // ---------------------------------------------







        // 2: get instance
        $ad = Advertisement::find($this->instance->id);




        // 2.1: general
        $ad->name = $this->instance->name ?? null;
        $ad->nameAr = $this->instance->name ?? null;
        $ad->isActive = $this->instance->isActive ?? false;




        // 2.2: imageFile
        $ad->imageFile = $this->instance->imageFileName ?? null;
        $ad->imageFileAr = $this->instance->imageFileNameAr ?? null;


        $ad->save();






        // 3: reset
        $this->instance->reset();
        $this->dispatch('resetFile', file: 'square--file-3', defaultPreview: $this->getDefaultPreview());
        $this->dispatch('resetFile', file: 'square--file-4', defaultPreview: $this->getDefaultPreview());


        $this->dispatch('refreshSquares');
        $this->dispatch('closeModal', modal: '#advertisements-square-edit .btn-close');
        $this->makeAlert('success', 'Advertisement has been updated');




    } // end function








    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.group.advertisements.components.advertisements-squares-edit');


    } // end function





} // end class
