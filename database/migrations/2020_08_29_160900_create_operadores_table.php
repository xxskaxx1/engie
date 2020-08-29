<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperadoresTable extends Migration{
    public function up(){
        Schema::create('operadores', function (Blueprint $table) {
            $table->bigIncrements('id_operador');
            $table->string('nombre',80);
        });
    }
    public function down(){
        Schema::dropIfExists('operadores');
    }
}
