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
        Schema::create('products', function (Blueprint $table) {
            $table->id();





            // 1: general
            $table->string('serial', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('nameAr', 255)->nullable();



            // 1.2: sort [category - mainPage - offerPrice]
            $table->integer('index')->nullable();
            $table->integer('indexMainPage')->nullable();
            $table->integer('indexOffers')->nullable();






            // 1.3: prices
            $table->double('buyPrice', 15)->nullable();
            $table->double('sellPrice', 15)->nullable();
            $table->double('offerPrice', 15)->nullable();




            // 1.4: information
            $table->text('information')->nullable();
            $table->text('informationAr')->nullable();






            // ----------------------------------------------
            // ----------------------------------------------





            // 2: unit - null => byName
            $table->string('weightOption', 100)->nullable();
            $table->double('weight', 15)->nullable();

            $table->bigInteger('unitId')->unsigned()->nullable();
            $table->foreign('unitId')->references('id')->on('units')->onDelete('set null');




            // 2.1: units - quantityPerUnit - quantity - maxQuantityPerOrder
            $table->integer('units')->nullable()->default(0);
            $table->integer('quantityPerUnit')->nullable()->default(0);
            $table->double('quantity', 15)->nullable()->default(0);
            $table->double('maxQuantityPerOrder', 15)->nullable()->default(0);








            // ----------------------------------------------
            // ----------------------------------------------





            // 3: isHidden - isMainPage
            $table->boolean('isHidden')->nullable()->default(0);
            $table->boolean('isMainPage')->nullable()->default(0);




            // 3.1: imageFile
            $table->text('imageFile')->nullable();
            $table->text('secondImageFile')->nullable();
            $table->text('thirdImageFile')->nullable();
            $table->text('fourthImageFile')->nullable();






            // 3.2: company - category - subCategory - type
            $table->bigInteger('companyId')->unsigned()->nullable();
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('set null');


            $table->bigInteger('categoryId')->unsigned()->nullable();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('set null');


            $table->bigInteger('subCategoryId')->unsigned()->nullable();
            $table->foreign('subCategoryId')->references('id')->on('sub_categories')->onDelete('set null');


            $table->bigInteger('typeId')->unsigned()->nullable();
            $table->foreign('typeId')->references('id')->on('types')->onDelete('set null');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('products');
    }
};
