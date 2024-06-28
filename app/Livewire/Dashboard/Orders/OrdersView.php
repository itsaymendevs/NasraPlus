<?php

namespace App\Livewire\Dashboard\Orders;

use App\Livewire\Forms\OrderForm;
use App\Models\Order;
use App\Traits\HelperTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class OrdersView extends Component
{



    use HelperTrait;

    // :: variables
    public OrderForm $instance;
    public $order;




    public function mount($id)
    {


        // 1: get instance
        $this->order = Order::find($id);


        foreach ($this->order->toArray() as $key => $value)
            $this->instance->{$key} = $value;





    } // end function








    // ---------------------------------------------------------------------------





    public function remount()
    {


        $this->order = Order::find($this->order->id);


        foreach ($this->order->toArray() as $key => $value)
            $this->instance->{$key} = $value;




        $this->render();



    } // end function






    // ---------------------------------------------------------------------------









    public function updateOrderNote()
    {


        // 1: get instance
        $order = Order::find($this->order->id);



        // 1.2: general
        $order->orderNote = $this->instance?->orderNote ?? null;
        $order->save();




        $this->makeAlert('info', 'Remark has been updated');


    } // end function












    // ---------------------------------------------------------------------------









    public function cancelOrder()
    {


        // 1: confirmationBox

        if ($this->order->orderStatus == 'Canceled') {


            $this->makeAlert('question', 'Update Cancellation Details?', 'confirmCancelOrder');


        } else {


            $this->makeAlert('question', 'Continue with Order Cancellation?', 'confirmCancelOrder');

        } // end if

    } // end function











    // ---------------------------------------------------------------------------









    #[On('confirmCancelOrder')]
    public function confirmCancelOrder()
    {


        // 1: get instance
        $order = Order::find($this->order->id);



        // 1.2: general
        $order->orderStatus = "Canceled";
        $order->orderEmployeeId = session('employeeId');
        $order->orderStatusDateTime = date('Y-m-d h:i:s');
        $order->orderCancellationNote = $this->instance->orderCancellationNote ?? null;







        // 1.3: refundDetails
        $order->refundInvoiceNumber = $this->instance->refundInvoiceNumber ?? null;



        // 1.3.5: employee - dateTime
        if ($this->instance->refundInvoiceNumber) {


            $order->refundDateTime = date('Y-m-d h:i:s');
            $order->refundEmployeeId = session('employeeId');


        } else {


            $order->refundDateTime = null;
            $order->refundEmployeeId = null;


        } // end if




        $order->save();







        // 2: remount
        $this->remount();
        $this->makeAlert('info', 'Order has been canceled');






    } // end function













    // ---------------------------------------------------------------------------








    public function render()
    {

        return view('livewire.dashboard.orders.orders-view');

    } // end function


} // end class
