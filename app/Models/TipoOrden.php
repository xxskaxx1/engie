<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoOrden extends Model{
    protected $fillable =
        [
            'id_tipo',
            'nombre',
        ];
    protected $table = 'tipoorden';
    protected $primaryKey = 'id_tipo';
    public $timestamps = false;
    protected $guarded = [];
}
