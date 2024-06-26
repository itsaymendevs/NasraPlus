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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();


            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();
            $table->text('password')->nullable();
            $table->string('permission', 100)->nullable()->default('Low');
            $table->boolean('isActive')->nullable()->default(1);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('employees');
    }
};
