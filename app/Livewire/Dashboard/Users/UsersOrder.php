<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\Order;
use App\Models\User;
use App\Traits\HelperTrait;
use Livewire\Component;


class UsersOrder extends Component
{



    use HelperTrait;





    // :: variables
    public $user, $order, $searchStatus, $toSDG;








    public function mount($id)
    {


        // 1: get instance
        $this->toSDG = 1;
        $this->order = Order::find($id);
        $this->user = User::find($this->order->userId);



    } // end function







    // ---------------------------------------------------------------------------







    public function convertCurrency($toSDG)
    {



        // 1: update toSDG
        $this->toSDG = $toSDG;
        $this->render();





    } // end function













    // ---------------------------------------------------------------------------







    public function render()
    {


        // 1: dependencies
        $statuses = ['Pending', 'Processing', 'Canceled', 'Completed'];



        return view('livewire.dashboard.users.users-order', compact('statuses'));




    } // end function






} // end class
