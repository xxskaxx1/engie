<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Engie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


        <script src="https://use.fontawesome.com/fd2ae9c22d.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="">
                    Engie
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('IndexOrdenes')}}">Ordenes de trabajo <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('IndexOperadores')}}">Operadores <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('IndexTipos')}}">Tipos de orden <span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header><br>
        @if(isset($objOrdenes))
            <div class="row">
                <div class="col-12 flex-center">
                    <table class="table" id="ordenes">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="6">
                                    <h3>ORDENES</h3>
                                </th>
                                <th class="text-center" style="width: 20%;">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#adicionar_orden_modal">Crear Orden <i class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#cargar_orden_modal">Carga Masiva <i class="fa fa-plus"></i></button>
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Operador</th>
                                <th class="text-center">Fecha de creación</th>
                                <th class="text-center">Fecha de asignación</th>
                                <th class="text-center">Fecha de ejecución</th>
                                <th class="text-center">Tipo</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($objOrdenes as $ordenes)
                                <tr>
                                    <td class="text-center">{{$ordenes->id_orden}}</td>
                                    <td class="text-left">{{$ordenes->nombre_operador}}</td>
                                    <td class="text-center">{{$ordenes->fecha_creacion}}</td>
                                    <td class="text-center">{{$ordenes->fecha_asignacion}}</td>
                                    <td class="text-center">{{$ordenes->fecha_ejecucion}}</td>
                                    <td class="text-center">{{$ordenes->nombre_tipo}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" onclick="ModificarModal('{{$ordenes->id_orden}}','{{$ordenes->fecha_creacion}}','{{$ordenes->fecha_asignacion}}','{{$ordenes->fecha_ejecucion}}','{{$ordenes->id_operador}}','{{$ordenes->resultado}}','{{$ordenes->valor}}','{{$ordenes->id_tipo}}')">Modificar</button>
                                        <button type="button" class="btn btn-danger" onclick="EliminarModal('{{$ordenes->id_orden}}')">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        @include('Ordenes.Adicionar')
        @include('Ordenes.Modificar')
        @include('Ordenes.Eliminar')
        @include('Ordenes.Cargar')
    </body>
</html>
<script type="text/javascript">
    function ModificarModal(id_orden,fecha_creacion,fecha_asignacion,fecha_ejecucion,id_operador,resultado,valor,id_tipo){
        $('#mod_id_orden').val(id_orden);
        $('#mod_fecha_creacion').val(fecha_creacion);
        $('#mod_fecha_asignacion').val(fecha_asignacion);
        $('#mod_fecha_ejecucion').val(fecha_ejecucion);
        $('#mod_id_operador').val(id_operador);
        $('#mod_id_tipo').val(id_tipo);
        $('#mod_resultado').val(resultado);
        $('#mod_valor').val(valor);
        $('#modificar_orden_modal').modal('show');
    }
    function EliminarModal(id_orden){
        $('#eliminar_id_orden').val(id_orden);
        $('#eliminar_orden_modal').modal('show');
    }
    function fechamin(valor){
        $('#fecha_ejecucion').attr("min",valor);
    }
    function fechamax(valor){
        $('#fecha_asignacion').attr("max",valor);
    }
</script>
