<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operadores extends Model{
    protected $fillable =
        [
            'id_operador',
            'nombre',
        ];
    protected $table = 'operadores';
    protected $primaryKey = 'id_operador';
    public $timestamps = false;
    protected $guarded = [];
}
