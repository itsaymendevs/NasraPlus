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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();



            // 1: general
            // :: isFor => delivery - pickup
            // :: type => pending - processing
            $table->string('type', 100)->nullable();
            $table->string('isFor', 100)->nullable();




            // 1.2: content
            $table->text('content')->nullable();
            $table->text('contentAr')->nullable();


            // 1.3: isActive
            $table->boolean('isActive')->nullable()->default(1);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('messages');
    }
};
