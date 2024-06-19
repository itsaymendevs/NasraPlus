<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   /**
    * Run the migrations.
    */
   public function up() : void
   {
      Schema::create('orders', function (Blueprint $table) {
         $table->id();



         // 1: general
         $table->text('userToken')->nullable();
         $table->boolean('isConfirmed')->nullable()->default(1);


         $table->integer('orderNumber')->nullable();
         $table->string('orderDateTime', 100)->nullable();
         $table->string('orderSecondPhone', 100)->nullable();
         $table->string('orderLang', 100)->nullable()->default('EN');






         // 1.2: orderStatus [WAITING - COMPLETED - CANCELED]
         $table->string('orderStatus', 100)->nullable();
         $table->string('orderStatusDateTime', 100)->nullable();




         // 1.3: orderNote
         $table->text('orderNote')->nullable();
         $table->text('orderCancellationNote')->nullable();




         // 1.4: orderEmployee
         $table->bigInteger('orderEmployeeId')->unsigned()->nullable();
         $table->foreign('orderEmployeeId')->references('id')->on('employees')->onDelete('set null');






         // ---------------------------------------------------------------
         // ---------------------------------------------------------------







         // 2: receivingOption (DELIVERY - PICKUP)
         $table->string('receivingOption', 100)->nullable();




         // 2.1: countryInformation [country / lettersCode / toSDG]
         $table->string('countryLettersCode', 100)->nullable();
         $table->double('toSDG', 15)->nullable()->default(1);

         $table->bigInteger('countryId')->unsigned()->nullable();
         $table->foreign('countryId')->references('id')->on('countries')->onDelete('set null');








         // ---------------------------------------------------------------
         // ---------------------------------------------------------------








         // 3: DeliveryOption


         // 3.1: fullAddress [address - state - deliveryRegion]
         $table->text('address')->nullable();


         $table->bigInteger('stateId')->unsigned()->nullable();
         $table->foreign('stateId')->references('id')->on('states')->onDelete('set null');

         $table->bigInteger('provinceId')->unsigned()->nullable();
         $table->foreign('provinceId')->references('id')->on('state_provinces')->onDelete('set null');


         $table->bigInteger('deliveryRegionId')->unsigned()->nullable();
         $table->foreign('deliveryRegionId')->references('id')->on('delivery_regions')->onDelete('set null');





         // 3.2: deliveryEstimatedTime
         $table->text('deliveryEstimatedTime')->nullable();
         $table->text('deliveryEstimatedTimeAr')->nullable();



         // 3.3: deliveryTime
         $table->double('deliveryPrice', 15)->nullable();





         // --------------------------------------
         // --------------------------------------





         // 3.5: pickupOption
         $table->string('pickupCode', 100)->nullable();



         // 3.6: store
         $table->bigInteger('storeId')->unsigned()->nullable();
         $table->foreign('storeId')->references('id')->on('pickup_stores')->onDelete('set null');










         // ---------------------------------------------------------------
         // ---------------------------------------------------------------







         // 4: totalPrices
         $table->double('productsPrice', 15)->nullable();
         $table->double('orderTotalPrice', 15)->nullable();




         // 4.1: paymentInformation [DIRECTPAYMENT - ONLINEBANKINGPAYMENT - ATRECEIVINGPAYMENT]
         $table->text('paymentNote')->nullable();
         $table->string('paymentType', 100)->nullable();
         $table->string('paymentDateTime', 100)->nullable();


         $table->bigInteger('paymentId')->unsigned()->nullable();
         $table->foreign('paymentId')->references('id')->on('payments')->onDelete('set null');






         // ---------------------------------
         // ---------------------------------




         // 4.2: DIRECTPAYMENT - options
         $table->text('paymentIntent')->nullable();
         $table->text('paymentURL')->nullable();





         // ---------------------------------
         // ---------------------------------




         // 4.3: isPaymentDone - paymentEmployee
         $table->boolean('isPaymentDone')->nullable()->default(0);

         $table->bigInteger('paymentEmployeeId')->unsigned()->nullable();
         $table->foreign('paymentEmployeeId')->references('id')->on('employees')->onDelete('set null');











         // ---------------------------------------------------------------
         // ---------------------------------------------------------------








         // 5: ReceiverInformation
         $table->string('receiverName', 255)->nullable();
         $table->string('receiverPhone', 100)->nullable();
         $table->string('receiverSecondPhone', 100)->nullable();

         $table->bigInteger('receiverId')->unsigned()->nullable();
         $table->foreign('receiverId')->references('id')->on('user_receivers')->onDelete('set null');






         // ---------------------------------
         // ---------------------------------




         // 5.2: invoiceNumber
         $table->text('invoiceNumber')->nullable();





         // 5.3: refunds
         $table->text('refundInvoiceNumber')->nullable();
         $table->string('refundDateTime', 100)->nullable();

         $table->bigInteger('refundEmployeeId')->unsigned()->nullable();
         $table->foreign('refundEmployeeId')->references('id')->on('employees')->onDelete('set null');










         // 6: user
         $table->bigInteger('userId')->unsigned()->nullable();
         $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');







         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down() : void
   {
      Schema::dropIfExists('orders');
   }
};
