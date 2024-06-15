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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('type', 100)->nullable();

            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();
            $table->string('accountName', 255)->nullable();
            $table->string('accountNumber', 255)->nullable();




            // 1.2: isFor - isActive
            $table->boolean('isForDelivery')->nullable()->default(0);
            $table->boolean('isForPickup')->nullable()->default(0);
            $table->boolean('isForRefund')->nullable()->default(0);

            $table->boolean('isActive')->nullable()->default(1);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('payments');
    }
};
