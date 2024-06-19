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
        Schema::create('delivery_regions', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();
            $table->double('price', 15)->nullable();




            // 1.2: isActive
            $table->boolean('isActive')->nullable()->default(1);






            // 1.3: state - stateProvince - deliveryTime
            $table->bigInteger('stateId')->unsigned()->nullable();
            $table->foreign('stateId')->references('id')->on('states')->onDelete('cascade');

            $table->bigInteger('provinceId')->unsigned()->nullable();
            $table->foreign('provinceId')->references('id')->on('state_provinces')->onDelete('set null');


            $table->bigInteger('deliveryTimeId')->unsigned()->nullable();
            $table->foreign('deliveryTimeId')->references('id')->on('delivery_times')->onDelete('set null');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('delivery_regions');
    }
};
