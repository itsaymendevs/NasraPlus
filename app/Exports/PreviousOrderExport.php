<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class PreviousOrderExport implements FromCollection, WithHeadings
{



    // :: variables
    public $orders;




    public function __construct($orders)
    {


        // :: handleParams
        $this->orders = $orders;



    } // end function








    // ------------------------------------------------------------------









    public function headings() : array
    {
        return [
            "Order No.",
            "Order DateTime",
            "Order Status",
            "no. of Products",


            "Products Original Price",
            "Products Sell Price",

            "Order Total Price",
            "Receiving Option",

            // 1.1: pickup
            "Pickup Store",
            "Receipt Code",



            // 1.2: delivery
            "Delivery State",
            "Delivery Region",
            "Delivery Price",


            "Customer Name",
            "Phone Number",
            "Second Phone Number",

            "Payment Status",
            "Payment Type",
            "Payment Method",

            "Invoice/Receipt Number",
            "Resp Employee to Order",
            "Order Completion/Cancellation DateTime",

            "Resp Employee for Payment",
            "Payment Date and Time",
            "Order Notes",



            // 2: Refunds
            "Resp Employee for Cancel and Refund",
            "Refund Date and Time",
            "Refund Invoice/Receipt Number",
            "Cancellation Note",



        ];
    } // end headings








    // ------------------------------------------------------------------







    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - orders
        foreach ($this->orders ?? [] as $order) {


            $instance = new stdClass();




            // 1: general
            $instance->id = $order->orderNumber;
            $instance->orderDateTime = date('d / m / Y - h:i A', strtotime($order->orderDateTime));
            $instance->orderStatus = $order->orderStatus;


            $instance->totalProducts = $order->products->count() != 0 ? $order->products->count() : '0';
            $instance->productsBuyPrice = $order->products->count() != 0 ? $order->products->sum('orderBuyProductPrice') : '0';
            $instance->productsSellPrice = $order->productsPrice;
            $instance->orderTotalPrice = $order->orderTotalPrice;






            // 1.2: receivingOptions
            $instance->receivingOption = $order->receivingOption;

            if ($order->receivingOption == 'Pickup') {

                $instance->pickupStore = $order->store?->title;
                $instance->receiptCode = $order->pickupCode;


                // empty
                $instance->deliveryState = '';
                $instance->deliveryRegion = '';
                $instance->deliveryPrice = '';


            } else {


                // :: empty
                $instance->pickupStore = '';
                $instance->receiptCode = '';

                $instance->deliveryState = $order->state?->name;
                $instance->deliveryRegion = $order->deliveryRegion?->name;
                $instance->deliveryPrice = $order?->deliveryPrice ?? 0;


            } // end if




            // 1.2: customer
            $instance->customerName = $order->user?->fullName() ?? '';
            $instance->phoneNumber = $order->user?->phone;
            $instance->secondPhoneNumber = $order?->orderSecondPhone;



            // 1.3: payment
            $instance->paymentStatus = boolval($order->isPaymentDone) === true ? 'Paid' : 'Not Paid';
            $instance->paymentType = boolval($order->isPaymentDone) === true ? $order->paymentType : '';
            $instance->paymentMethod = (boolval($order->isPaymentDone) === true && ! empty($order->paymentId)) ? $order->payment->name : '';
            $instance->invoiceNumber = $order->invoiceNumber;


            $instance->orderEmployee = $order->orderEmployeeId ? $order->orderEmployee?->name : '';
            $instance->orderStatusDateTime = $order?->orderStatusDateTime;

            $instance->paymentEmployee = $order->paymentEmployeeId ? $order->paymentEmployee->name : '';
            $instance->paymentDateTime = $order->paymentDateTime;
            $instance->orderNote = $order?->orderNote;



            // 1.4: refund
            $instance->refundEmployee = $order->refundEmployeeId ? $order->refundEmployee?->name : '';
            $instance->refundDateTime = $order?->refundDateTime;
            $instance->refundInvoiceNumber = $order?->refundInvoiceNumber;
            $instance->orderCancellationNote = $order?->orderCancellationNote;



            array_push($combine, $instance);


        } // end loop








        return collect($combine);


    } // end function






} // end export



