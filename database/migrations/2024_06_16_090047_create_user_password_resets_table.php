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
        Schema::create('user_password_resets', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('otp', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->boolean('isConfirmed')->nullable()->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('user_password_resets');
    }
};
