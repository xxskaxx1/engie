<div class="modal fade" id="modificar_tipo_modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" style="color: white">Modificar Tipo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('ModificarTipos')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="mod_nombre" required autocomplete="off" style="text-transform: uppercase;">
                            <input type="text" class="form-control" name="id_tipo" id="mod_id_tipo" required readonly style="display: none;">
                        </div>
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