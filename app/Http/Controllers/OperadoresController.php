<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores;

class OperadoresController extends Controller{
    public function indexOperadores(){
    	$objOperadores=\DB::select("select * from operadores");
    	return view('Operadores.Inicio',compact('objOperadores'));
    }
    public function adicionarOperadores(Request $request){
    	$tabla = new Operadores;
        $tabla->id_operador= $request->id_operador;
        $tabla->nombre = strtoupper($request->nombre);
        $tabla->save();
        return redirect('IndexOperadores')->with('status','Se creó el registro exitosamente');
    }
    public function modificarOperadores(Request $request){
        try{
            $tabla=Operadores::find($request->id_operador);
            $tabla->id_operador= $request->id_operador;
        	$tabla->nombre = strtoupper($request->nombre);
            $tabla->save();
            return redirect('IndexOperadores')->with('status','Se creó el registro exitosamente');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect('IndexOperadores')->with('warning','No se creó el registro erro: '.$e);
        }
    }
    public function eliminarOperadores(Request $request){
        $objEliminar=\DB::select("delete from operadores where id_operador = ".$request->id_operador);
        return redirect('IndexOperadores')->with('status','Se elimino el registro exitosamente');
    }
}
