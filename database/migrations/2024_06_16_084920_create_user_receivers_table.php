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
      Schema::create('user_receivers', function (Blueprint $table) {
         $table->id();



         // 1: general
         $table->string('name', 255)->nullable();
         $table->string('nameAr', 255)->nullable();



         // 1.2: phones
         $table->string('phone', 100)->nullable();
         $table->string('secondPhone', 100)->nullable();





         // 1.3: fullAddress
         $table->text('address')->nullable();


         $table->bigInteger('stateId')->unsigned()->nullable();
         $table->foreign('stateId')->references('id')->on('states')->onDelete('set null');

         $table->bigInteger('provinceId')->unsigned()->nullable();
         $table->foreign('provinceId')->references('id')->on('state_provinces')->onDelete('set null');

         $table->bigInteger('deliveryRegionId')->unsigned()->nullable();
         $table->foreign('deliveryRegionId')->references('id')->on('delivery_regions')->onDelete('set null');








         // 1.4: user
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
      Schema::dropIfExists('user_receivers');
   }
};
