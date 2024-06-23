<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCondition;
use App\Models\GeneralBlock;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\PaymentCondition;
use App\Models\PickupCondition;
use App\Models\PickupStore;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use stdClass;

class PreviousInterOrderController extends Controller
{




    public function previousInterOrders(Request $request)
    {


        // ::root
        $previousOrders = array();
        $user = User::find(auth()->user()->id);




        // 1: PreviousOrders
        $orders = Order::where('userId', $user->id)
            ->where('isConfirmed', 1)->get();


        foreach ($orders as $order) {


            $previousOrder = new stdClass();
            $previousOrder->generalInfo = new stdClass();
            $previousOrder->previousOrderProducts = array();




            // 1.1: General Info
            $previousOrder->generalInfo->orderNumber = strval($order->orderNumber);
            $previousOrder->generalInfo->orderDate = date('d-m-Y', strtotime($order->orderDateTime));
            $previousOrder->generalInfo->orderTime = date('h:i A', strtotime($order->orderDateTime));
            $previousOrder->generalInfo->orderStatus = $order->orderStatus;
            $previousOrder->generalInfo->paymentType = $order->paymentType;
            $previousOrder->generalInfo->paymentId = strval($order->paymentId);
            $previousOrder->generalInfo->isPaymentDone = boolval($order->isPaymentDone);


            // 1.1: receiver
            $previousOrder->receiverName = $order->receiverName;
            $previousOrder->receiverPhoneNumber = $order->receiverPhone;
            $previousOrder->receiverSecondPhoneNumber = $order->receiverPhoneAlt;


            // 1.1: invoice / SDG
            $previousOrder->invoiceNumber = $order->invoiceNumber;
            $previousOrder->refundInvoiceNumber = $order->refundInvoiceNumber;
            $previousOrder->whenOrderedToSDG = strval($order->toSDG);






            // 1.2: Products
            $previousOrderProducts = OrderProduct::where('orderId', $order->id)->get();


            foreach ($previousOrderProducts as $previousOrderProduct) {


                $content = new stdClass();

                $content->id = strval($previousOrderProduct->id);
                $content->name = $previousOrderProduct->name;
                $content->nameAr = $previousOrderProduct->nameAr;

                $content->productType = $previousOrderProduct->weightOption;
                $content->packSize = strval($previousOrderProduct->weight);
                $content->measuringUnitId = strval($previousOrderProduct->unitId);

                $content->orderProductQuantity = strval(number_format($previousOrderProduct->orderProductQuantity, 2, '.', ''));
                $content->orderProductPrice = strval($previousOrderProduct->orderProductPrice);



                array_push($previousOrder->previousOrderProducts, $content);


            } // end loop











            // 1.3: General Info Part.2
            $previousOrder->generalInfo->foreignProductsPrice = strval(round($order->productsPrice / $order->toSDG,2));
            $previousOrder->generalInfo->foreignOrderTotalPrice = strval(round($order->orderTotalPrice  / $order->toSDG,2));

            $previousOrder->generalInfo->ProductsPrice = strval($order->productsPrice);
            $previousOrder->generalInfo->OrderTotalPrice = strval($order->orderTotalPrice);





            // 1.4: Receiving Option
            $previousOrder->receivingOption = $order->receivingOption;


            // 1.4.1: deliveryOrder
            if ($order->receivingOption == "DELIVERY") {


                $previousOrder->deliveryPreviousOrder = new stdClass();

                $previousOrder->deliveryPreviousOrder->stateDeliveryId = strval($order->stateId);
                $previousOrder->deliveryPreviousOrder->regionDeliveryId = strval($order->deliveryAreaId);

                $previousOrder->deliveryPreviousOrder->deliveryEstimatedTime = $order->deliveryEstimatedTime;
                $previousOrder->deliveryPreviousOrder->deliveryEstimatedTimeAr = $order->deliveryEstimatedTimeAr;
                $previousOrder->deliveryPreviousOrder->deliveryPrice = strval($order->deliveryPrice);
                $previousOrder->deliveryPreviousOrder->foreignDeliveryPrice = strval(round($order->deliveryPrice / $order->toSDG, 2));



                // 4.4.2: pickupOrder
            } else {

                $previousOrder->pickupPreviousOrder = new stdClass();

                $previousOrder->pickupPreviousOrder->storeId = strval($order->storeId);
                $previousOrder->pickupPreviousOrder->pickupCode = $order->pickupCode;


            } // end if











            // ::push to Array
            array_push($previousOrders, $previousOrder);



        } // end loop






        // ::prepare response
        $response = new stdClass();
        $response->previousInterOrders = $previousOrders;


        return response()->json($response);


    } // end function







    // -------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------



    public function confirmInterOrder(Request $request)
    {


        // 1: PreviousOrders
        $order = Order::where('orderNumber', $request->orderNumber)->first();





        $previousOrder = new stdClass();
        $previousOrder->generalInfo = new stdClass();
        $previousOrder->previousOrderProducts = array();




        // 1.1: General Info
        $previousOrder->generalInfo->orderNumber = strval($order->orderNumber);
        $previousOrder->generalInfo->orderDate = date('d-m-Y', strtotime($order->orderDateTime));
        $previousOrder->generalInfo->orderTime = date('h:i A', strtotime($order->orderDateTime));
        $previousOrder->generalInfo->orderStatus = $order->orderStatus;
        $previousOrder->generalInfo->paymentType = $order->paymentType;
        $previousOrder->generalInfo->paymentId = strval($order->paymentId);
        $previousOrder->generalInfo->isPaymentDone = boolval($order->isPaymentDone);


        // 1.1: receiver
        $previousOrder->receiverName = $order->receiverName;
        $previousOrder->receiverPhoneNumber = $order->receiverPhone;
        $previousOrder->receiverSecondPhoneNumber = $order->receiverPhoneAlt;


        // 1.1: invoice / SDG
        $previousOrder->invoiceNumber = strval($order->invoiceNumber);
        $previousOrder->refundInvoiceNumber = $order->refundInvoiceNumber;
        $previousOrder->whenOrderedToSDG = strval($order->toSDG);






        // 1.2: Products and updated products
        $previousOrderProducts = OrderProduct::where('orderId', $order->id)->get();

        $updateProducts = array();

        foreach ($previousOrderProducts as $previousOrderProduct) {


            $content = new stdClass();

            $content->id = strval($previousOrderProduct->id);
            $content->name = $previousOrderProduct->name;
            $content->nameAr = $previousOrderProduct->nameAr;

            $content->productType = $previousOrderProduct->weightOption;
            $content->packSize = strval($previousOrderProduct->weight);
            $content->measuringUnitId = strval($previousOrderProduct->unitId);

            $content->orderProductQuantity = strval(number_format($previousOrderProduct->orderProductQuantity, 2, '.', ''));
            $content->orderProductPrice = strval($previousOrderProduct->orderProductPrice);



            array_push($previousOrder->previousOrderProducts, $content);


            //::add updated product

            // :: Add Product into updateProducts
            $content = new stdClass();

            $content->id = strval($previousOrderProduct->product->id);
            $content->mainCategoryId = strval($previousOrderProduct->product->mainCategoryId);
            $content->subCategoryId = strval($previousOrderProduct->product->subCategoryId);
            $content->typeId = strval($previousOrderProduct->product->typeId);


            $content->quantityAvailable = strval(number_format($previousOrderProduct->product->quantity, 2, '.', ''));
            $content->originalPrice = strval($previousOrderProduct->product->sellPrice);
            $content->offerPrice = strval($previousOrderProduct->product->offerPrice);

            array_push($updateProducts, $content);


        } // end loop











        // 1.3: General Info Part.2
        $previousOrder->generalInfo->foreignProductsPrice = strval(round($order->productsPrice / $order->toSDG,2));
        $previousOrder->generalInfo->foreignOrderTotalPrice = strval(round($order->orderTotalPrice  / $order->toSDG,2));

        $previousOrder->generalInfo->ProductsPrice = strval($order->productsPrice);
        $previousOrder->generalInfo->OrderTotalPrice = strval($order->orderTotalPrice);





        // 1.4: Receiving Option
        $previousOrder->receivingOption = $order->receivingOption;


        // 1.4.1: deliveryOrder
        if ($order->receivingOption == "DELIVERY") {


            $previousOrder->deliveryPreviousOrder = new stdClass();

            $previousOrder->deliveryPreviousOrder->stateDeliveryId = strval($order->stateId);
            $previousOrder->deliveryPreviousOrder->regionDeliveryId = strval($order->deliveryAreaId);

            $previousOrder->deliveryPreviousOrder->deliveryEstimatedTime = $order->deliveryEstimatedTime;
            $previousOrder->deliveryPreviousOrder->deliveryEstimatedTimeAr = $order->deliveryEstimatedTimeAr;
            $previousOrder->deliveryPreviousOrder->deliveryPrice = strval($order->deliveryPrice);
            $previousOrder->deliveryPreviousOrder->foreignDeliveryPrice = strval(round($order->deliveryPrice / $order->toSDG, 2));




            // 4.4.2: pickupOrder
        } else {

            $previousOrder->pickupPreviousOrder = new stdClass();

            $previousOrder->pickupPreviousOrder->storeId = strval($order->storeId);
            $previousOrder->pickupPreviousOrder->pickupCode = $order->pickupCode;


        } // end if






        // ---------------------------------------------------------
        // ---------------------------------------------------------



        // 5: check order validity









        // ::prepare response
        $response = new stdClass();
        $response->validOrder = boolval($order->isConfirmed);
        $response->previousInterOrder = $previousOrder;
        $response->updateProducts = $updateProducts;


        return response()->json($response);


    } // end function








} // end controller
