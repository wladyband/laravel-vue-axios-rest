<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('logradouro_endereco');
            $table->string('bairro_endereco');

            $table->float('preco');
            $table->integer('qtd_quartos');
            $table->enum('tipo', ['apartamento', 'casa', 'kitnet']);
            $table->enum('finalidade', ['venda', 'locacao']);
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
        Schema::dropIfExists('imoveis');
    }
}
