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
        Schema::create('address_information', function (Blueprint $table) {
            $table->id();


            // 1: general
            $table->text('address')->nullable();
            $table->text('longitude')->nullable();
            $table->text('latitude')->nullable();

            $table->text('imageFile')->nullable();
            $table->boolean('isActive')->nullable()->default(1);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('address_information');
    }
};
