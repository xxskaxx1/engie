<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
//use Maatwebsite\Excel\Excel;
use App\Models\OrdenTrab;
use App\Imports\OrdenTrabImport;

class OrdenesController extends Controller{
    public function indexOrdenes(){
    	$objOrdenes=\DB::select("select ord.*, ope.nombre as nombre_operador, ope.id_operador, tip.nombre as nombre_tipo, tip.id_tipo from ordentrab ord inner join operadores ope on(ope.id_operador = ord.id_operador) inner join tipoorden tip on(tip.id_tipo = ord.id_tipo)");
    	$objOperadores=\DB::select("select * from operadores");
    	$objTipos=\DB::select("select * from tipoorden");
    	return view('Ordenes.Inicio',compact('objOrdenes','objOperadores','objTipos'));
    }
    public function adicionarOrden(Request $request){
    	$tabla = new OrdenTrab;
        $tabla->id_tipo = $request->id_tipo;
        $tabla->fecha_creacion = $request->fecha_creacion;
        $tabla->fecha_asignacion = $request->fecha_asignacion;
        $tabla->fecha_ejecucion = $request->fecha_ejecucion;
        $tabla->id_operador = $request->id_operador;
        $tabla->resultado = $request->resultado;
        $tabla->valor = $request->valor;
        $tabla->save();
        return redirect('IndexOrdenes')->with('status','Se creó el registro exitosamente');
    }
    public function modificarOrden(Request $request){
        try{
            $tabla=OrdenTrab::find($request->id_orden);
            $tabla->id_tipo = $request->id_tipo;
            $tabla->fecha_asignacion = $request->fecha_asignacion;
            $tabla->fecha_ejecucion = $request->fecha_ejecucion;
            $tabla->id_operador = $request->id_operador;
            $tabla->resultado = $request->resultado;
            $tabla->valor = $request->valor;
            $tabla->save();
            return redirect('IndexOrdenes')->with('status','Se creó el registro exitosamente');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect('IndexOrdenes')->with('warning','No se creó el registro erro: '.$e);
        }
    }
    public function eliminarOrden(Request $request){
        $objEliminar=\DB::select("delete from ordentrab where id_orden = ".$request->id_orden);
        return redirect('IndexOrdenes')->with('status','Se elimino el registro exitosamente');
    }
    public function cargarOrden(Request $request){
        $archivo = $request->file('archivo');
        $archivo->move('uploads', $archivo->getClientOriginalName());
        Excel::import(new OrdenTrabImport, 'uploads/'.$archivo->getClientOriginalName());
        return redirect('IndexOrdenes')->with('status','Se cargaron los registros exitosamente');
    }
    public function tablaOrdenes(){
        $objOrdenes=\DB::select("select ord.*, ope.nombre as nombre_operador, ope.id_operador, tip.nombre as nombre_tipo, tip.id_tipo from ordentrab ord inner join operadores ope on(ope.id_operador = ord.id_operador) inner join tipoorden tip on(tip.id_tipo = ord.id_tipo)");
        return view('Ordenes.Tabla',compact('objOrdenes'));
    }
}
