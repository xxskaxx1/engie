<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenTrab extends Model{
    protected $fillable =
        [
            'id_orden',
            'fecha_creacion',
            'fecha_asignacion',
            'fecha_ejecucion',
            'id_tipo',
            'id_operador',
            'resultado',
            'valor',
        ];
    protected $table = 'ordentrab';
    protected $primaryKey = 'id_orden';
    public $timestamps = false;
    protected $guarded = [];
}
