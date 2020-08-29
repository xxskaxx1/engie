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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
              padding-top: 3rem;
              padding-bottom: 3rem;
            }

            footer p {
              margin-bottom: .25rem;
            }
        </style>
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
        @if(isset($objOperadores))
            <div class="row">
                <div class="col-12 flex-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">
                                    <h3>OPERADORES</h3>
                                </th>
                                <th class="text-center" style="width: 25%;">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionar_orden_modal">Crear Operador<i class="fa fa-plus"></i></button>
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($objOperadores as $operadores)
                                <tr>
                                    <td class="text-center">{{$operadores->id_operador}}</td>
                                    <td class="text-left">{{$operadores->nombre}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" onclick="ModificarModal('{{$operadores->id_operador}}','{{$operadores->nombre}}')">Modificar</button>
                                        <button type="button" class="btn btn-danger" onclick="EliminarModal('{{$operadores->id_operador}}')">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        @include('Operadores.Adicionar')
        @include('Operadores.Modificar')
        @include('Operadores.Eliminar')
    </body>
</html>
<script type="text/javascript">
    function ModificarModal(id_operador,nombre){
        $('#mod_id_operador').val(id_operador);
        $('#mod_nombre').val(nombre);
        $('#modificar_operador_modal').modal('show');
    }
    function EliminarModal(id_operador){
        $('#eliminar_id_operador').val(id_operador);
        $('#eliminar_operador_modal').modal('show');
    }
</script>
