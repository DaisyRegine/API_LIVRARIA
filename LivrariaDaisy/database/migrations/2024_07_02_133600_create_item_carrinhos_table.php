<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // database/migrations/xxxx_xx_xx_create_itens_carrinho_table.php
    public function up()
    {
        Schema::create('itens_carrinho', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrinho_id')->constrained();
            $table->foreignId('livro_id')->constrained();
            $table->integer('quantidade');
            $table->decimal('preco', 8, 2);
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
        Schema::dropIfExists('item_carrinhos');
    }
}