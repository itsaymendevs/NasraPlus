<?php

namespace App\Livewire\Dashboard\Help\Group\MessagesGlobal\Components;

use App\Livewire\Forms\MessageForm;
use App\Models\MessageGlobal;
use App\Traits\HelperTrait;
use Livewire\Component;

class MessagesGlobalPhoneConfirmation extends Component
{


    use HelperTrait;




    // :: variables
    public MessageForm $instance;





    public function mount()
    {



        // 1: dependencies
        $message = MessageGlobal::where('isFor', 'Phone Confirmation')->first();


        foreach ($message->toArray() as $key => $value)
            $this->instance->{$key} = $value;





    } // end function







    // ---------------------------------------------------------------------------









    public function update()
    {



        // :: validation
        $this->instance->validate();





        // 1: get instance
        $message = MessageGlobal::find($this->instance->id);




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



        return view('livewire.dashboard.help.group.messages-global.components.messages-global-phone-confirmation');


    } // end function


} //end class
