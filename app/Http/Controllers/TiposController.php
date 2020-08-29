<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoOrden;

class TiposController extends Controller{
    public function indexTipos(){
    	$objTipos=\DB::select("select * from tipoorden");
    	return view('Tipos.Inicio',compact('objTipos'));
    }
    public function adicionarTipos(Request $request){
    	$tabla = new TipoOrden;
        $tabla->id_tipo= $request->id_tipo;
        $tabla->nombre = strtoupper($request->nombre);
        $tabla->save();
        return redirect('IndexTipos')->with('status','Se creó el registro exitosamente');
    }
    public function modificarTipos(Request $request){
        try{
            $tabla=TipoOrden::find($request->id_tipo);
            $tabla->id_tipo= $request->id_tipo;
        	$tabla->nombre = strtoupper($request->nombre);
            $tabla->save();
            return redirect('IndexTipos')->with('status','Se creó el registro exitosamente');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect('IndexTipos')->with('warning','No se creó el registro erro: '.$e);
        }
    }
    public function eliminarTipos(Request $request){
        $objEliminar=\DB::select("delete from tipoorden where id_tipo = ".$request->id_tipo);
        return redirect('IndexTipos')->with('status','Se elimino el registro exitosamente');
    }
}
