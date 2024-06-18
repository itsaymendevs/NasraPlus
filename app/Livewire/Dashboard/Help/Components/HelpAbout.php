<?php

namespace App\Livewire\Dashboard\Help\Components;

use App\Livewire\Forms\AboutForm;
use App\Models\AboutInformation;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class HelpAbout extends Component
{


    use HelperTrait;
    use WithPagination;





    // :: variables
    public AboutForm $instance;







    public function store()
    {




        // 1: get instance
        $about = new AboutInformation();



        // 1.2: general
        $about->title = $this->instance->title ?? null;
        $about->titleAr = $this->instance->titleAr ?? null;
        $about->content = $this->instance->content ?? null;
        $about->contentAr = $this->instance->contentAr ?? false;



        $about->save();





        // 2: reset
        $this->instance->reset();

        $this->makeAlert('success', 'Paragraph has been created');






    } // end function











    // ---------------------------------------------------------------------------








    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmAboutParagraphRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmAboutParagraphRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            AboutInformation::find($this->removeId)->delete();

            $this->makeAlert('info', 'Paragraph has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function












    // ---------------------------------------------------------------------------








    public function render()
    {



        // 1: dependencies
        $paragraphs = AboutInformation::orderBy('created_at', 'desc')
            ->paginate(env('PAGINATE_XXL'));







        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.components.help-about', compact('paragraphs'));


    } // end function



} // end class
