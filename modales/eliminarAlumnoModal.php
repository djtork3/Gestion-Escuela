<!-- Modal de confirmación para eliminar alumno -->
<div class="modal fade" id="eliminarAlumnoModal" tabindex="-1" role="dialog" aria-labelledby="eliminarAlumnoModalLabel" aria-hidden="true">
<div class="modal-dialog draggable modal-dialog-centered" role="document">
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarAlumnoModalLabel">Confirmar Eliminación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="deleteModalBody">
        ¿Estás seguro de que deseas eliminar este alumno?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
      </div>
    </div>
  </div>
</div>
