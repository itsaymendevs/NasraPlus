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
        Schema::create('country_contacts', function (Blueprint $table) {
            $table->id();


            // 1: general
            $table->string('email', 255)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->text('whatsappURL')->nullable();





            // 1.3: country
            $table->bigInteger('countryId')->unsigned()->nullable();
            $table->foreign('countryId')->references('id')->on('countries')->onDelete('cascade');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('country_contacts');
    }
};
