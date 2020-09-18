<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('advisor_id');
            $table->bigInteger('staff_id')->nullable();
            $table->bigInteger('restaurant_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->longText('images')->nullable();
            $table->longText('image_gallery')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->time('preparation_time',0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_products');
    }
}
