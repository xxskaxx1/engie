<div class="modal fade" id="modificar_orden_modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" style="color: white">Modificar Orden</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('ModificarOrden')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <label for="mod_fecha_creacion">Fecha de creación</label>
                            <input type="text" class="form-control" name="fecha_creacion" id="mod_fecha_creacion" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
                        </div>
                        <div class="col-4">
                            <label for="mod_fecha_asignacion">Fecha de asignación</label>
                            <input type="date" class="form-control" name="fecha_asignacion" id="mod_fecha_asignacion" required>
                        </div>
                        <div class="col-4">
                            <label for="mod_fecha_ejecucion">Fecha de ejecución</label>
                            <input type="date" class="form-control" name="fecha_ejecucion" id="mod_fecha_ejecucion" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="mod_id_tipo">Tipo</label>
                            <select class="form-control" id="mod_id_tipo" name="id_tipo" required>
                                @foreach($objTipos as $tipos)
                                    <option value="{{$tipos->id_tipo}}">{{$tipos->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="mod_id_operador">Operador</label>
                            <select class="form-control" id="mod_id_operador" name="id_operador" required>
                                <option></option>
                                @foreach($objOperadores as $operadores)
                                    <option value="{{$operadores->id_operador}}">{{$operadores->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="mod_resultado">Resultado</label>
                            <input type="text" class="form-control" name="resultado" id="mod_resultado" required>
                        </div>
                        <div class="col-6">
                            <label for="mod_valor">Valor</label>
                            <input type="number" step="0.1" class="form-control" name="valor" id="mod_valor" required autocomplete="off">
                        </div>
                        <input type="text" class="form-control" name="id_orden" id="mod_id_orden" required readonly style="display: none;">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>