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
      Schema::create('users', function (Blueprint $table) {
         $table->id();



         // 1: general
         $table->string('firstName', 100)->nullable();
         $table->string('lastName', 100)->nullable();
         $table->string('email', 255)->nullable();
         $table->string('phone', 100)->nullable();
         $table->string('secondPhone', 100)->nullable();




         // 1.2: password - isActive
         $table->text('password')->nullable();
         $table->boolean('isActive')->nullable()->default(1);





         // 1.3: country
         $table->bigInteger('countryId')->unsigned()->nullable();
         $table->foreign('countryId')->references('id')->on('countries')->onDelete('set null');





         // -------------------------------------------
         // -------------------------------------------





         // 1: SD Address
         $table->text('address')->nullable();

         $table->bigInteger('stateId')->unsigned()->nullable();
         $table->foreign('stateId')->references('id')->on('states')->onDelete('set null');


         $table->bigInteger('provinceId')->unsigned()->nullable();
         $table->foreign('provinceId')->references('id')->on('state_provinces')->onDelete('set null');


         $table->bigInteger('deliveryRegionId')->unsigned()->nullable();
         $table->foreign('deliveryRegionId')->references('id')->on('delivery_regions')->onDelete('set null');







         // ---------------------------




         // 2: UK Address
         $table->string('townCity', 255)->nullable();
         $table->string('postcode', 255)->nullable();
         $table->text('firstAddressLine')->nullable(); // UK - IRL
         $table->text('secondAddressLine')->nullable(); // UK - IRL
         $table->text('thirdAddressLine')->nullable();




         // ---------------------------




         // 3: IRL Address
         $table->string('postTown', 255)->nullable();
         $table->string('county', 255)->nullable();
         $table->string('eircode', 255)->nullable();




         $table->rememberToken();
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down() : void
   {
      Schema::dropIfExists('users');
   }
};
