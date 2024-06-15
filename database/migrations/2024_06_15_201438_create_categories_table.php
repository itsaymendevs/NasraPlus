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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();



            // 1.2: sort - imageFile
            $table->integer('index')->nullable();
            $table->text('imageFile')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('categories');
    }
};
