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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();

            // 1: general
            $table->text('name')->nullable();
            $table->text('nameAr')->nullable();
            $table->string('type', 100)->nullable();




            // 1.2: isActive
            $table->boolean('isActive')->nullable()->default(1);




            // 1.3: imageFile
            $table->text('imageFile')->nullable();
            $table->text('imageFileAr')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('advertisements');
    }
};
