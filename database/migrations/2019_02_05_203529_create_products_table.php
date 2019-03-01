<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->unique();
            $table->unsignedInteger('brand_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('cover_img');
            $table->mediumText('short_description');
            $table->longText('description')->nullable();
            $table->mediumText('images')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->float('sale_price', 8, 2)->nullable();
            $table->float('price_after_discount', 8, 2)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
