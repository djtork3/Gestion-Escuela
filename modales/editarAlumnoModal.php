<!-- Editar Alumno Modal -->
<div id="editarAlumnoModal" class="modal fade">
    <div class="modal-dialog draggable modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="editDataForm"> 
                <div class="modal-header">                        
                    <h4 class="modal-title">Editar Alumno</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group row">
                        <!-- Agregar un campo oculto con el ID del alumno -->
                        <input type='hidden' id='editID' name='editID' value=''>
                        <label for="editNombre" class="col-sm-3 col-form-label">Nombre y Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editNombre" name="editNombre" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editMatricula" class="col-sm-3 col-form-label">Matrícula:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editMatricula" name="editMatricula" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editLicencia" class="col-sm-3 col-form-label">Licencia:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editLicencia" name="editLicencia" class="form-control" required>
                        </div>
                    </div>
                    <!-- Meses -->
                    <div class="form-group">
                        <label class="col-form-label">Meses:</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="editOctubre" name="editOctubre" class="form-control" placeholder="Octubre">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editNoviembre" name="editNoviembre" class="form-control" placeholder="Noviembre">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editDiciembre" name="editDiciembre" class="form-control" placeholder="Diciembre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="editEnero" name="editEnero" class="form-control" placeholder="Enero">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editFebrero" name="editFebrero" class="form-control" placeholder="Febrero">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editMarzo" name="editMarzo" class="form-control" placeholder="Marzo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="editAbril" name="editAbril" class="form-control" placeholder="Abril">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editMayo" name="editMayo" class="form-control" placeholder="Mayo">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="editJunio" name="editJunio" class="form-control" placeholder="Junio">
                            </div>
                        </div>
                    </div>
                    <!-- Fin de Meses -->
                    <div class="form-group row">
                        <label for="editAño" class="col-sm-3 col-form-label">Año:</label>
                        <div class="col-sm-9">
                            <select id="editAño" name="editAño" class="form-control">
                                <option value="23/24">23/24</option>
                                <option value="24/25">24/25</option>
                                <option value="25/26">25/26</option>
                                <option value="26/27">26/27</option>
                                <option value="27/28">27/28</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editPago" class="col-sm-3 col-form-label">Tipo de Pago:</label>
                        <div class="col-sm-9">
                            <select id="editPago" name="editPago" class="form-control">
                                <option value="TRANSFERENCIA">Transferencia</option>
                                <option value="EFECTIVO">Efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editTelefono" class="col-sm-3 col-form-label">Teléfono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editTelefono" name="editTelefono" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editPersona" class="col-sm-3 col-form-label">Tipo de Persona:</label>
                        <div class="col-sm-9">
                            <select id="editPersona" name="editPersona" class="form-control">
                                <option value="ADULTO">Adulto</option>
                                <option value="NIÑO">Niño</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>