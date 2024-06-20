<?php

namespace App\Livewire\Dashboard\Help\Group\Contact\Components;

use App\Livewire\Forms\CountryContactForm;
use App\Models\CountryContact;
use App\Traits\HelperTrait;
use Livewire\Component;

class ContactInformation extends Component
{



    use HelperTrait;


    // :: variables
    public CountryContactForm $instance;






    public function mount($id)
    {



        // 1: get instance
        $contact = CountryContact::where('countryId', $id)->first();

        foreach ($contact->toArray() as $key => $value)
            $this->instance->{$key} = $value;





    } // end function










    // ---------------------------------------------------------------------------







    public function update()
    {



        // 1: get instance
        $contact = CountryContact::where('countryId', $this->instance->id)->first();




        // 1.2: update
        $contact->email = $this->instance->email ?? null;
        $contact->whatsapp = $this->instance->whatsapp ?? null;
        $contact->whatsappURL = $this->instance->whatsappURL ?? null;

        $contact->save();





        $this->makeAlert('info', 'Information has been updated');
        $this->render();



    } // end function










    // ---------------------------------------------------------------------------








    public function render()
    {


        return view('livewire.dashboard.help.group.contact.components.contact-information');


    } // end function



} // end class
