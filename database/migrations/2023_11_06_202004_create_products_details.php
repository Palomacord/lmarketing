<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_details', function (Blueprint $table) {
            //relacionamento de tabelas;
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->float('length');
            $table->float('heigth');
            $table->float('width');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');

            //foreignkey

            //1-1
            $table->unique('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_details');
    }
}
