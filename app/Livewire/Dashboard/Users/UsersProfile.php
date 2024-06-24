<?php

namespace App\Livewire\Dashboard\Users;

use App\Livewire\Forms\UserForm;
use App\Models\Order;
use App\Models\User;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithPagination;

class UsersProfile extends Component
{


    use HelperTrait;
    use WithPagination;




    // :: variables
    public UserForm $instance;
    public $user, $searchStatus, $toSDG;








    public function mount($id)
    {


        // 1: get instance
        $this->toSDG = 1;
        $this->user = User::find($id);

        foreach ($this->user?->toArray() ?? [] as $key => $value)
            $this->instance->{$key} = $value;





        // 1.2: convertBoolean
        $this->instance->isActive = boolval($this->instance->isActive);




    } // end function












    // ---------------------------------------------------------------------------







    public function convertCurrency($toSDG)
    {



        // 1: update toSDG
        $this->toSDG = $toSDG;
        $this->render();





    } // end function











    // ---------------------------------------------------------------------------







    public function toggleActive()
    {



        // 1: get instance
        $user = User::find($this->instance->id);




        // 1.2: toggleActive
        $user->isActive = ! $user->isActive;
        $user->save();





        // 1.3: sync instance
        $this->instance->isActive = $user->isActive;
        $this->makeAlert('info', 'Status has been updated');
        $this->render();






    } // end function











    // ---------------------------------------------------------------------------











    public function render()
    {


        // 1: dependencies
        $statuses = ['Pending', 'Processing', 'Canceled', 'Completed'];

        $orders = Order::where('userId', $this->user->id)
            ->whereIn('orderStatus', $this->searchStatus ? [$this->searchStatus] : $statuses)
            ->paginate(env('PAGINATE_XXL'));






        return view('livewire.dashboard.users.users-profile', compact('orders', 'statuses'));




    } // end function






} // end class
