<?php

namespace App\Livewire\Dashboard\Orders;

use App\Livewire\Forms\OrderForm;
use App\Livewire\Forms\OrderOTPForm;
use App\Models\Message;
use App\Models\MessageGlobal;
use App\Models\Order;
use App\Models\Payment;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;

class OrdersView extends Component
{



   use HelperTrait;

   // :: variables
   public OrderForm $instance;
   public OrderOTPForm $instanceOTP;

   public $order, $paymentMethods, $refundMethods, $toSDG;




   public function mount($id)
   {


      // 1: get instance
      $this->toSDG = 1;
      $this->order = Order::find($id);


      foreach ($this->order->toArray() as $key => $value)
         $this->instance->{$key} = $value;









      // ---------------------------------------
      // ---------------------------------------







      // 1.2: getOtp
      if ($this->order?->country?->name == 'Sudan') {



         // A: local
         $otp = Message::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->first();



         if ($otp) {

            $this->instanceOTP->content = $this->order->orderLang == 'en' ? $otp->content : $otp->contentAr;
            $this->instanceOTP->isContentActive = $otp->isActive;

         } // end if






      } else {



         // B: international
         $otpUser = MessageGlobal::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->where('target', 'User')
            ->first();


         $otpReceiver = MessageGlobal::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->where('target', 'Receiver')
            ->first();





         if ($otpUser) {

            $this->instanceOTP->content = $this->order->orderLang == 'en' ? $otpUser->content : $otpUser->contentAr;
            $this->instanceOTP->isContentActive = $otpUser->isActive;

         } // end if



         if ($otpReceiver) {

            $this->instanceOTP->contentReceiver = $this->order->orderLang == 'en' ? $otpReceiver->content : $otpReceiver->contentAr;
            $this->instanceOTP->isContentReceiverActive = $otpReceiver->isActive;

         } // end if



      } // end if








      // ---------------------------------------
      // ---------------------------------------






      // 2: dependencies


      // 2.1: payment - refund
      if ($this->order->receivingOption == 'Pickup') {


         $this->paymentMethods = Payment::where('isActive', 1)
            ->where('isForPickup', 1)
            ->where('type', $this->order?->paymentType)->get();



         $this->refundMethods = Payment::where('isActive', 1)
            ->where('isForRefund', 1)
            ->where('type', $this->order?->paymentType)->get();



      } else {

         $this->paymentMethods = Payment::where('isActive', 1)
            ->where('isForDelivery', 1)
            ->where('type', $this->order?->paymentType)->get();



         $this->refundMethods = Payment::where('isActive', 1)
            ->where('isForRefund', 1)
            ->where('type', $this->order?->paymentType)->get();



      } // end if




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










   public function remountOTP()
   {


      // :: reset
      $this->instanceOTP->reset();






      // 1: getOtp
      if ($this->order?->country?->name == 'Sudan') {



         // A: local
         $otp = Message::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->first();


         if ($otp) {

            $this->instanceOTP->content = $this->order->orderLang == 'en' ? $otp->content : $otp->contentAr;
            $this->instanceOTP->isContentActive = $otp->isActive;


         } // end if






      } else {




         // B: international
         $otpUser = MessageGlobal::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->where('target', 'User')?->first();


         $otpReceiver = MessageGlobal::where('type', $this->order->orderStatus)
            ->where('isFor', $this->order->receivingOption)
            ->where('target', 'Receiver')?->first();





         if ($otpUser) {

            $this->instanceOTP->content = $this->order->orderLang == 'en' ? $otpUser->content : $otpUser->contentAr;
            $this->instanceOTP->isContentActive = $otpUser->isActive;

         } // end if



         if ($otpReceiver) {

            $this->instanceOTP->contentReceiver = $this->order->orderLang == 'en' ? $otpReceiver->content : $otpReceiver->contentAr;
            $this->instanceOTP->isContentReceiverActive = $otpReceiver->isActive;

         } // end if



      } // end if






   } // end function









   // ---------------------------------------------------------------------------






   public function nextStep()
   {



      // 1: get instance
      $order = Order::find($this->order->id);




      // 1.2: updateStatus
      if ($this->order?->orderStatus == 'Pending') {

         $order->orderStatus = 'Processing';

      } elseif ($this->order?->orderStatus == 'Processing') {




         // 1.2.5: checkPayment
         if (! $this->order?->isPaymentDone) {

            $this->makeAlert('info', 'Payment has not been completed');
            return false;

         } // end if




         // :: continue
         $order->orderStatus = 'Completed';


      } // end if




      // 1.3: general
      $order->orderEmployeeId = session('employeeId');
      $order->orderStatusDateTime = date('Y-m-d h:i:s');


      $order->save();







      // 2: remount
      $this->remount();
      $this->remountOTP();
      $this->makeAlert('info', 'Status has been updated');




   } // end function











   // ---------------------------------------------------------------------------






   public function previousStep()
   {



      // 1: get instance
      $order = Order::find($this->order->id);




      // 1.2: updateStatus
      if ($this->order?->orderStatus == 'Processing') {

         $order->orderStatus = 'Pending';

      } elseif ($this->order?->orderStatus == 'Completed') {

         $order->orderStatus = 'Processing';

      } // end if






      // 1.3: general
      $order->orderEmployeeId = session('employeeId');
      $order->orderStatusDateTime = date('Y-m-d h:i:s');


      $order->save();





      // 2: remount
      $this->remount();
      $this->remountOTP();
      $this->makeAlert('info', 'Status has been updated');




   } // end function









   // ---------------------------------------------------------------------------










   public function sendOTP($target)
   {


      // ::root
      $token = env('SMS_TOKEN');




      // 1: forCustomer
      if ($target == 'customer') {




         // 1.2: checkActive
         if ($this->instanceOTP->isContentActive == false) {

            $this->makeAlert('info', 'Messaging is not active, please check settings');
            return false;

         } // end if





         // 1.3: check if empty
         if (empty($this->instanceOTP->content)) {

            $this->makeAlert('info', 'Message is empty');
            return false;

         } // end if




         // 1.4: decodeOTP - sendOTP
         $decodedContent = $this->decodeOTP($this->instanceOTP->content, $this->order->id);
         $response = $this->sendCustomOTP($token, $this->order?->user?->phone, $decodedContent);




         if ($response)
            $this->makeAlert('success', 'Message has been sent!');






         // 2: forReceiver
      } elseif ($target == 'receiver') {





         // 2.2: checkActive
         if ($this->instanceOTP->isContentReceiverActive == false) {

            $this->makeAlert('info', 'Messaging is not active, please check settings');
            return false;

         } // end if





         // 2.3: check if empty
         if (empty($this->instanceOTP->contentReceiver)) {

            $this->makeAlert('info', 'Message is empty');
            return false;

         } // end if





         // 2.4: decodeOTP - sendOTP
         $decodedContent = $this->decodeOTP($this->instanceOTP->contentReceiver, $this->order->id);
         $response = $this->sendCustomOTP($token, $this->order->receiverPhone, $decodedContent);




         if ($response)
            $this->makeAlert('success', 'Message has been sent!');


      } // end if











   } // end function














   // ---------------------------------------------------------------------------






   public function convertCurrency($toSDG)
   {



      // 1: update toSDG
      $this->toSDG = $toSDG;
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



      // 1: checkRefund
      if ($this->order->isPaymentDone) {


         if (empty($this->instance->refundInvoiceNumber)) {

            $this->makeAlert('info', 'Please fill the refund invoice');
            return false;

         } // end if




         if (boolval($this->instance->isPaymentDone) && $this->order->country?->name == 'Sudan' && empty($this->instance->refundPaymentId)) {

            $this->makeAlert('info', 'Please fill the refund Method');
            return false;

         } // end if


      } // end if








      // -------------------------------------------------------------
      // -------------------------------------------------------------







      // 2: confirmationBox
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
      $order->refundPaymentId = $this->instance->refundPaymentId ?? null;



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







   public function cancelPayment()
   {



      // 1: confirmationBox
      if ($this->order->isPaymentDone) {


         $this->makeAlert('question', 'Continue with Payment Cancellation?', 'confirmCancelPayment');


      } else {

         $this->makeAlert('question', 'Update Details?', 'confirmCancelPayment');


      } // end if




   } // end function











   // ---------------------------------------------------------------------------









   #[On('confirmCancelPayment')]
   public function confirmCancelPayment()
   {


      // 1: get instance
      $order = Order::find($this->order->id);



      // 1.2: general
      $order->isPaymentDone = false;
      $order->paymentNote = $this->instance->paymentNote ?? null;
      $order->paymentEmployeeId = session('employeeId');
      $order->paymentDateTime = date('Y-m-d h:i:s');




      // 1.3: removePaidDetails
      $order->paymentId = null;
      $order->invoiceNumber = null;


      // 1.4: refundDetails
      $order->refundInvoiceNumber = null;
      $order->refundDateTime = null;
      $order->refundEmployeeId = null;
      $order->refundPaymentId = null;

      $order->save();











      // 2: resetPayment - remount
      $this->dispatch('setSelect', id: '#payment-select', value: null);
      $this->remount();
      $this->makeAlert('info', 'Payment has been canceled');






   } // end function














   // ---------------------------------------------------------------------------







   public function confirmPayment()
   {



      // 1: confirmationBox
      if ($this->order->isPaymentDone) {


         $this->makeAlert('question', 'Continue with Payment Confirmation?', 'confirmPayment');


      } else {

         $this->makeAlert('question', 'Update Details?', 'confirmPayment');


      } // end if




   } // end function











   // ---------------------------------------------------------------------------









   #[On('confirmPayment')]
   public function confirmPaymentConfirmation()
   {


      // 1: get instance
      $order = Order::find($this->order->id);



      // 1.2: general
      $order->isPaymentDone = true;
      $order->paymentId = $this->instance->paymentId ?? null;
      $order->invoiceNumber = $this->instance->invoiceNumber ?? null;
      $order->paymentEmployeeId = session('employeeId');
      $order->paymentDateTime = date('Y-m-d h:i:s');






      // 1.3: removeNotPaidDetails
      $order->paymentNote = null;

      $order->save();







      // 2: remount
      $this->remount();
      $this->makeAlert('info', 'Payment has been confirmed');
      $this->dispatch('setSelect', id: '#refund-payment-select', value: $order->refundPaymentId);







   } // end function








   // ---------------------------------------------------------------------------








   public function render()
   {




      // :: initTooltips
      $this->dispatch('initTooltips');


      return view('livewire.dashboard.orders.orders-view');



   } // end function






} // end class
