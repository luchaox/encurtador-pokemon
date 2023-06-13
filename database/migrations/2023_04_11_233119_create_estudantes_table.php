<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->date('nascimento');
            $table->integer('sala_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudantes');
    }

};
