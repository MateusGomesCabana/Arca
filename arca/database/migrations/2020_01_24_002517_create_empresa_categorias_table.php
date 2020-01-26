<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_categorias', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();
        });

       
        Schema::table('empresa_categorias', function (Blueprint $table) {
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_categorias');
    }
}
