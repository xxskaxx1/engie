<div class="modal fade" id="eliminar_orden_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" style="color: white">Eliminar Orden</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('EliminarOrden')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="text" id="eliminar_id_orden" name="id_orden" readonly style="display: none;">
                        ¿Esta seguro que desea eliminar el registro?
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>