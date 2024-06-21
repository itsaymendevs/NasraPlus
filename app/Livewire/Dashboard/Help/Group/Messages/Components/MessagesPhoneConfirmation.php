<?php

namespace App\Livewire\Dashboard\Help\Group\Messages\Components;

use App\Livewire\Forms\MessageForm;
use App\Models\Message;
use App\Traits\HelperTrait;
use Livewire\Component;

class MessagesPhoneConfirmation extends Component
{


    use HelperTrait;




    // :: variables
    public MessageForm $instance;





    public function mount()
    {



        // 1: dependencies
        $message = Message::where('isFor', 'Phone Confirmation')->first();


        foreach ($message->toArray() as $key => $value)
            $this->instance->{$key} = $value;





    } // end function







    // ---------------------------------------------------------------------------









    public function update()
    {



        // :: validation
        $this->instance->validate();





        // 1: get instance
        $message = Message::find($this->instance->id);




        // 1.2: general
        $message->content = $this->instance->content ?? null;
        $message->contentAr = $this->instance->contentAr ?? null;

        $message->save();






        // 2: alert
        $this->makeAlert('success', 'Message has been updated');
        $this->render();



    } // end function















    // ---------------------------------------------------------------------------







    public function render()
    {



        return view('livewire.dashboard.help.group.messages.components.messages-phone-confirmation');


    } // end function


} //end class
