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
        Schema::create('delivery_conditions', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('title', 255)->nullable();
            $table->string('titleAr', 255)->nullable();
            $table->text('content')->nullable();
            $table->text('contentAr')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('delivery_conditions');
    }
};
