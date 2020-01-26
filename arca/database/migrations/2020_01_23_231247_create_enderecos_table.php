<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('endereco',255);
            $table->string('cidade',255);
            $table->string('estado',255);
            $table->string('cep',255);
            $table->integer('empresa_id')->unsigned();
            $table->timestamps();
        });

       
        Schema::table('enderecos', function (Blueprint $table) {
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
