<?php

namespace App\Livewire\Dashboard\Help\Components;

use App\Livewire\Forms\AboutForm;
use App\Models\AboutInformation;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class HelpAboutEdit extends Component
{


    use HelperTrait;




    // :: variables
    public AboutForm $instance;






    #[On('editAboutParagraph')]
    public function remount()
    {



        // 1: get instance
        $aboutInformation = AboutInformation::first();

        foreach ($aboutInformation->toArray() as $key => $value)
            $this->instance->{$key} = $value;




    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $about = AboutInformation::find($this->instance->id);



        // 1.2: general
        $about->title = $this->instance->title ?? null;
        $about->titleAr = $this->instance->titleAr ?? null;
        $about->content = $this->instance->content ?? null;
        $about->contentAr = $this->instance->contentAr ?? false;



        $about->save();




        // 2: reset
        $this->instance->reset();
        $this->dispatch('closeModal', modal: '#paragraphs-edit .btn-close');
        $this->dispatch('refreshAbout');
        $this->makeAlert('success', 'Paragraph has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {



        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.components.help-about-edit');


    } // end function





} // end class
