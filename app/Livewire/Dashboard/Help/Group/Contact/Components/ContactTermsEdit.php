<?php

namespace App\Livewire\Dashboard\Help\Group\Contact\Components;

use App\Livewire\Forms\CountryTermForm;
use App\Models\CountryTerm;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ContactTermsEdit extends Component
{


    use HelperTrait;




    // :: variables
    public CountryTermForm $instance;






    #[On('editTerm')]
    public function remount($id)
    {



        // 1: get instance
        $term = CountryTerm::find($id);

        foreach ($term->toArray() as $key => $value)
            $this->instance->{$key} = $value;



    } // end function







    // ---------------------------------------------------------------------------






    public function update()
    {




        // 1: get instance
        $term = CountryTerm::find($this->instance->id);




        // 1.2: general
        $term->title = $this->instance->title ?? null;
        $term->titleAr = $this->instance->titleAr ?? null;
        $term->content = $this->instance->content ?? null;
        $term->contentAr = $this->instance->contentAr ?? null;

        $term->countryId = $this->instance->countryId ?? null;


        $term->save();








        // 2: reset
        $this->instance->reset();
        $this->dispatch('refreshTerms');
        $this->dispatch('closeModal', modal: '#terms-edit .btn-close');




        $this->makeAlert('success', 'Term has been updated');




    } // end function





    // ---------------------------------------------------------------------------








    public function render()
    {




        // :: initTooltips
        $this->dispatch('initTooltips');


        return view('livewire.dashboard.help.group.contact.components.contact-terms-edit');



    } // end function





} // end class
