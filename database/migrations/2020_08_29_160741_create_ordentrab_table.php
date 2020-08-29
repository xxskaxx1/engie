<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdentrabTable extends Migration{
    public function up(){
        Schema::create('ordentrab', function (Blueprint $table){
            $table->bigIncrements('id_orden');
            $table->dateTime('fecha_creacion');
            $table->date('fecha_asignacion')->nullable();
            $table->date('fecha_ejecucion')->nullable();
            $table->Integer('id_tipo')->unsigned();
            $table->Integer('id_operador')->unsigned()->nullable();
            $table->text('resultado')->nullable();
            $table->decimal('valor',10,2)->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists('ordentrab');
    }
}
