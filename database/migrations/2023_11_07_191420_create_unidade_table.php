<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('unit',5);
            $table->string('description',30);
        });

        // relacionamento de um pra muitos
        Schema::table('products', function(Blueprint $table){
            $table->bigInteger('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('products');
        });

        Schema::table('products_details', function(Blueprint $table){
            $table->bigInteger('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('products_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover os relacionamentos da tabela produto e produtos detalhes

        Schema::table('products', function(Blueprint $table){
            $table->dropForeign('products_unit_id_foreign');
            $table->dropColumn('unit_id');
        });

        Schema::table('products_details', function(Blueprint $table){
            $table->dropForeign('products_details_unit_id_foreign');
            $table->dropColumn('unit_id');
        });

        Schema::dropIfExists('unidade');
    }
}
