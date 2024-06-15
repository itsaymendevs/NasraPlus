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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();



            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();



            // 1.2: code - currency
            $table->string('code', 100)->nullable();
            $table->double('toSDG', 15)->nullable();
            $table->string('currency', 100)->nullable();



            // 1.3: isActive
            $table->boolean('isServiceActive')->nullable()->default(1);
            $table->boolean('isOrderingActive')->nullable()->default(1);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('countries');
    }
};
