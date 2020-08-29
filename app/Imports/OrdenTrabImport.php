<?php

namespace App\Imports;

use App\Models\OrdenTrab;
use Maatwebsite\Excel\Concerns\ToModel;

class OrdenTrabImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row){
        return new OrdenTrab([
            'fecha_creacion' => date('Y-m-d H:i:s', strtotime($row[0])),
            'fecha_asignacion' => date("Y-m-d", strtotime($row[1])),
            'fecha_ejecucion' => date("Y-m-d", strtotime($row[2])),
            'id_tipo' => number_format($row[3]),
            'id_operador' => $row[4],
            'resultado' => "'".$row[5]."'",
            'valor' => $row[6],
        ]);
    }
}
