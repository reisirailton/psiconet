<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsicologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psicologos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('crp');
            $table->string('valor_sessao')->nullable();
            $table->longText('descricao')->nullable();
            $table->unsignedBigInteger('id_plano');
            $table->unsignedBigInteger('id_user');
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
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
        Schema::dropIfExists('psicologos');
    }
}
