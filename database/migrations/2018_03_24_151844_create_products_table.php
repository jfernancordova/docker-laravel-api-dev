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
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('store_id');
            $table->string('product_id');
            $table->string('variation_id');
            $table->text('src');
            $table->text('position');
            $table->string('stock')->nullable();
            $table->text('url');
            $table->float('price')->nullable();
            $table->text('selected');
            $table->string('user_id');
            $table->string('promotional_price')->nullable();
            $table->string('link')->nullable();
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
