<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoordenTable extends Migration{
    public function up()
    {
        Schema::create('tipoorden', function (Blueprint $table) {
            $table->bigIncrements('id_tipo');
            $table->string('nombre',30);
        });
    }
    public function down()
    {
        Schema::dropIfExists('tipoorden');
    }
}
