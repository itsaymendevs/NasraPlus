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
        Schema::create('types', function (Blueprint $table) {
            $table->id();


            // 1: general
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();




            // 1.2: sort
            $table->integer('index')->nullable();





            // 1.3: category - subCategory
            $table->bigInteger('categoryId')->unsigned()->nullable();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');

            $table->bigInteger('subCategoryId')->unsigned()->nullable();
            $table->foreign('subCategoryId')->references('id')->on('sub_categories')->onDelete('cascade');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('types');
    }
};
