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
        Schema::create('pickup_stores', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('title', 255)->nullable();
            $table->string('titleAr', 255)->nullable();
            $table->text('information')->nullable();
            $table->text('informationAr')->nullable();




            // 1.2: receivingTimes
            $table->text('receivingTimes')->nullable();
            $table->text('receivingTimesAr')->nullable();


            // 1.3: latitude - longitude
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();





            // 1.4: isMainStore - isActive - imageFile
            $table->text('imageFile')->nullable();
            $table->boolean('isMainStore')->nullable()->default(0);
            $table->boolean('isActive')->nullable()->default(1);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('pickup_stores');
    }
};
