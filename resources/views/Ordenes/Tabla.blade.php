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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('TablaOrdenes')}}">Formulario 4 - Tabla<span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header><br>
        @if(isset($objOrdenes))
            <div class="row">
                <div class="col-12 flex-center">
                    <table id="ordenes" border="1" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="8">
                                    <h3>ORDENES</h3>
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">No. Orden</th>
                                <th class="text-center">F. creación</th>
                                <th class="text-center">Tipo</th>
                                <th class="text-center">F. asignación</th>
                                <th class="text-center">F.ejecución</th>
                                <th class="text-center">Operador</th>
                                <th class="text-center">Resultado</th>
                                <th class="text-center">Valor</th>     
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($objOrdenes as $ordenes)
                                <tr>
                                    <td class="text-center">{{$ordenes->id_orden}}</td>
                                    <td class="text-center">{{$ordenes->fecha_creacion}}</td>
                                    <td class="text-center">{{$ordenes->nombre_tipo}}</td>
                                    <td class="text-center">{{$ordenes->fecha_asignacion}}</td>
                                    <td class="text-center">{{$ordenes->fecha_ejecucion}}</td>
                                    <td class="text-left">{{$ordenes->nombre_operador}}</td>
                                    <td class="text-center">{{$ordenes->resultado}}</td>
                                    <td class="text-center">{{$ordenes->valor}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </body>
</html>
