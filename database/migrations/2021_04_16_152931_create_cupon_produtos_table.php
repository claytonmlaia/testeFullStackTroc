<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupon_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produtos_id');
            $table->unsignedBigInteger('cupon_descontos_id');
            $table->timestamps();

            $table->foreign('produtos_id')->references('id')->on('produtos');
            $table->foreign('cupon_descontos_id')->references('id')->on('cupon_descontos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupon_produtos');
    }
}
