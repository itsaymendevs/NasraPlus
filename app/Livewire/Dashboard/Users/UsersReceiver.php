<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\Order;
use App\Models\User;
use App\Models\UserReceiver;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithPagination;

class UsersReceiver extends Component
{




    use HelperTrait;
    use WithPagination;




    // :: variables
    public $user, $receiver, $searchStatus, $toSDG;








    public function mount($id, $receiverId)
    {


        // 1: get instance
        $this->toSDG = 1;
        $this->user = User::find($id);
        $this->receiver = UserReceiver::find($receiverId);


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

        $orders = Order::where('receiverId', $this->receiver->id)
            ->whereIn('orderStatus', $this->searchStatus ? [$this->searchStatus] : $statuses)
            ->paginate(env('PAGINATE_XXL'));






        return view('livewire.dashboard.users.users-receiver', compact('orders', 'statuses'));




    } // end function






} // end class
