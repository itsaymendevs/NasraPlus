<?php

namespace App\Livewire\Dashboard\Help\Group\Contact\Components;

use App\Livewire\Forms\CountryPhoneForm;
use App\Models\CountryPhone;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ContactPhones extends Component
{


    use HelperTrait;


    // :: variables
    public CountryPhoneForm $instance;




    public function mount($id)
    {



        // 1: handleParams
        $this->instance->countryId = $id;



    } // end function









    // ---------------------------------------------------------------------------








    public function store()
    {



        // :: validation
        $this->instance->validate();



        // 1: get instance
        $phone = new CountryPhone();




        // 1.2: general
        $phone->phone = $this->instance->phone ?? null;
        $phone->countryId = $this->instance->countryId ?? null;

        $phone->save();




        $this->instance->phone = null;
        $this->makeAlert('info', 'Number has been created');
        $this->render();



    } // end function













    // ---------------------------------------------------------------------------







    public function remove($id)
    {


        // 1: params - confirmationBox
        $this->removeId = $id;

        $this->makeAlert('remove', null, 'confirmPhoneRemove');



    } // end function










    // ---------------------------------------------------------------------------







    #[On('confirmPhoneRemove')]
    public function confirmRemove()
    {



        // 1: checkExisting
        if ($this->removeId) {



            // 1.2: remove instance
            CountryPhone::find($this->removeId)->delete();

            $this->makeAlert('info', 'Number has been removed');


        } // end if






        // :: re-render
        $this->render();




    } // end function















    // ---------------------------------------------------------------------------








    public function render()
    {



        // 1: dependencies
        $phones = CountryPhone::where('countryId', $this->instance->countryId)->get();






        // :: init
        $this->dispatch('initTooltips');

        return view('livewire.dashboard.help.group.contact.components.contact-phones', compact('phones'));


    } // end function





} // end class
