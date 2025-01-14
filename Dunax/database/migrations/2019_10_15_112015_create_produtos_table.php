<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('uso');
            $table->longText('descricao');
            $table->longText('comp_quimica')->nullable();
            $table->string('familia')->nullable();
            //$table->float('valor');
            $table->string('ficha')->nullable();
            $table->string('fispq')->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id', 'nome')->on('categorias');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE produtos ADD COLUMN imagem LONGBLOB;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
