<?php

namespace App\Livewire\Dashboard\Help\Group\Contact\Components;

use App\Livewire\Forms\CountryTermForm;
use App\Models\CountryTerm;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ContactTerms extends Component
{


    use HelperTrait;


    // :: variables
    public CountryTermForm $instance;




    public function mount($id)
    {



        // 1: handleParams
        $this->instance->countryId = $id;



    } // end function








    // ---------------------------------------------------------------------------





    public function edit($id)
    {


        // 1: dispatchEvent
        $this->dispatch('editTerm', $id);


    } // end function









    // ---------------------------------------------------------------------------








    public function store()
    {



        // :: validation
        $this->instance->validate();



        // 1: get instance
        $term = new CountryTerm();





        // 1.2: general
        $term->title = $this->instance->title ?? null;
        $term->titleAr = $this->instance->titleAr ?? null;
        $term->content = $this->instance->content ?? null;
        $term->contentAr = $this->instance->contentAr ?? null;

        $term->countryId = $this->instance->countryId ?? null;


        $term->save();





        // 2: reset
        $this->instance->reset();
        $this->instance->countryId = $term->countryId;


        $this->makeAlert('info', 'Term has been created');
        $this->render();



    } // end function













    // ---------------------------------------------------------------------------







    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmTermRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmTermRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            CountryTerm::find($this->removeId)->delete();

            $this->makeAlert('info', 'Term has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function















    // ---------------------------------------------------------------------------









    #[On('refreshTerms')]
    public function render()
    {



        // 1: dependencies
        $terms = CountryTerm::where('countryId', $this->instance->countryId)->get();






        // :: init
        $this->dispatch('initTooltips');

        return view('livewire.dashboard.help.group.contact.components.contact-terms', compact('terms'));


    } // end function





} // end class
