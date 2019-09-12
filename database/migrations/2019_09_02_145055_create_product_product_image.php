<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProductImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_product_image')) {
            Schema::create('product_product_image', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('product_id');
                $table->unsignedBigInteger('product_image_id');

                $table->foreign('product_id')
                    ->references('id')
                    ->on('products');

                $table->foreign('product_image_id')
                    ->references('id')
                    ->on('product_images');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('product_product_images')) {
            Schema::dropIfExists('product_product_image');
        }
    }
}
