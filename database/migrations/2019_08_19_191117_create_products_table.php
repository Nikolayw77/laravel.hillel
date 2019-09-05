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
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                //$table->bigIncrements('id');

                $table->bigIncrements('id');
                $table->string('title')->unique();
                $table->text('description');
                $table->string('SKU', 35)->unique();
                //*Categories:
                $table->float('price');
                $table->float('discount')->nullable();
                $table->unsignedBigInteger('in_stock');
                $table->text('thumbnail');
                $table->string('short_description', 150);
                //*Images:
                $table->timestamps();
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
        Schema::dropIfExists('products');
    }
}
