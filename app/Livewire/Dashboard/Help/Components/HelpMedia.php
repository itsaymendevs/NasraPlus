<?php

namespace App\Livewire\Dashboard\Help\Components;

use App\Livewire\Forms\MediaForm;
use App\Models\MediaInformation;
use App\Traits\HelperTrait;
use Livewire\Component;

class HelpMedia extends Component
{


    use HelperTrait;


    // :: variables
    public MediaForm $instance;






    public function mount()
    {



        // 1: get instance
        $mediaDetail = MediaInformation::first();

        foreach ($mediaDetail->toArray() as $key => $value)
            $this->instance->{$key} = $value;




    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {



        // 1: get instance
        $media = MediaInformation::first();



        // 1.2: general
        $media->websiteURL = $this->instance->websiteURL ?? null;
        $media->facebookID = $this->instance->facebookID ?? null;
        $media->facebookURL = $this->instance->facebookURL ?? null;
        $media->linkedinID = $this->instance->linkedinID ?? null;
        $media->linkedinURL = $this->instance->linkedinURL ?? null;
        $media->twitterID = $this->instance->twitterID ?? null;
        $media->twitterURL = $this->instance->twitterURL ?? null;
        $media->instagramID = $this->instance->instagramID ?? null;
        $media->instagramURL = $this->instance->instagramURL ?? null;




        // 1.3: videoInformation
        $media->videoTitle = $this->instance->videoTitle ?? null;
        $media->videoTitleAr = $this->instance->videoTitleAr ?? null;
        $media->videoURL = $this->instance->videoURL ?? null;


        $media->save();






        $this->makeAlert('success', 'Information has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {





        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.components.help-media');


    } // end function



} // end class
