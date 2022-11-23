<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_votantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('votante_id');
            $table->string('votante_nome');
            $table->string('votante_documento');
            $table->string('votante_documento_tipo');
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
        Schema::dropIfExists('documentos_votantes');
    }
};
