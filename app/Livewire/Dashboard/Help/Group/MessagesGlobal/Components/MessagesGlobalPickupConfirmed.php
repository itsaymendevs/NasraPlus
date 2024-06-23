<?php

namespace App\Livewire\Dashboard\Help\Group\MessagesGlobal\Components;

use App\Livewire\Forms\MessageForm;
use App\Models\MessageGlobal;
use App\Traits\HelperTrait;
use Livewire\Component;

class MessagesGlobalPickupConfirmed extends Component
{




    use HelperTrait;




    // :: variables
    public MessageForm $instance;
    public MessageForm $instanceReceiver;





    public function mount()
    {



        // 1: getReceiver
        $message = MessageGlobal::where('isFor', 'Pickup')
            ->where('type', 'Confirm Reception')
            ->where('target', 'Receiver')
            ->first();


        foreach ($message?->toArray() ?? [] as $key => $value)
            $this->instanceReceiver->{$key} = $value;





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









    public function toggleActive()
    {



        // :: validation
        $this->instance->validate();





        // 1: get instance
        $message = MessageGlobal::find($this->instance->id);




        // 1.2: general
        $message->isActive = ! boolval($message->isActive);
        $message->save();






        // 2: update instance - alert
        $this->instance->isActive = $message->isActive;
        $this->makeAlert('success', 'Status has been updated');
        $this->render();



    } // end function










    // ---------------------------------------------------------------------------









    public function updateReceiver()
    {



        // :: validation
        $this->instanceReceiver->validate();





        // 1: get instanceReceiver
        $message = MessageGlobal::find($this->instanceReceiver->id);



        // 1.2: general
        $message->content = $this->instanceReceiver->content ?? null;
        $message->contentAr = $this->instanceReceiver->contentAr ?? null;

        $message->save();






        // 2: alert
        $this->makeAlert('success', 'Message has been updated');
        $this->render();



    } // end function











    // ---------------------------------------------------------------------------









    public function toggleReceiverActive()
    {



        // :: validation
        $this->instanceReceiver->validate();




        // 1: get instance
        $message = MessageGlobal::find($this->instanceReceiver->id);




        // 1.2: general
        $message->isActive = ! boolval($message->isActive);
        $message->save();






        // 2: update instance - alert
        $this->instanceReceiver->isActive = $message->isActive;
        $this->makeAlert('success', 'Status has been updated');
        $this->render();



    } // end function







    // ---------------------------------------------------------------------------







    public function render()
    {



        return view('livewire.dashboard.help.group.messages-global.components.messages-global-pickup-confirmed');


    } // end function


} //end class
