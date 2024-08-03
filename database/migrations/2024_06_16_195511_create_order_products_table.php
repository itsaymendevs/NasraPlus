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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->double('orderProductQuantity', 15, 2)->nullable();
            $table->double('orderProductPrice')->nullable();
            $table->double('orderBuyProductPrice')->nullable();




            // 1.2: product
            $table->string('serial', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();
            $table->double('sellPrice')->nullable();
            $table->double('buyPrice')->nullable();

            $table->bigInteger('productId')->unsigned()->nullable();
            $table->foreign('productId')->references('id')->on('products')->onDelete('set null');




            // 1.3: unit
            $table->double('weight', 15, 2)->nullable();
            $table->string('weightOption', 100)->nullable();

            $table->bigInteger('unitId')->unsigned()->nullable();
            $table->foreign('unitId')->references('id')->on('units')->onDelete('set null');




            // 2: order - user
            $table->bigInteger('orderId')->unsigned()->nullable();
            $table->foreign('orderId')->references('id')->on('orders')->onDelete('cascade');

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
        Schema::dropIfExists('order_products');
    }
};
