<!-- Modal para añadir alumno -->
<div id="añadirAlumnoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="añadirAlumnoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="addDataForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="añadirAlumnoModalLabel">Añadir Alumno</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre y Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="matricula" class="col-sm-3 col-form-label">Matrícula:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="licencia" class="col-sm-3 col-form-label">Licencia:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="licencia" name="licencia">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Meses:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="octubre" name="octubre" placeholder="Octubre">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="noviembre" name="noviembre" placeholder="Noviembre">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="diciembre" name="diciembre" placeholder="Diciembre">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="enero" name="enero" placeholder="Enero">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="febrero" name="febrero" placeholder="Febrero">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="marzo" name="marzo" placeholder="Marzo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="abril" name="abril" placeholder="Abril">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="mayo" name="mayo" placeholder="Mayo">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="junio" name="junio" placeholder="Junio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="año" class="col-sm-3 col-form-label">Año:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="año" name="año">
                                <option value="23/24">23/24</option>
                                <option value="24/25">24/25</option>
                                <option value="25/26">25/26</option>
                                <option value="26/27">26/27</option>
                                <option value="27/28">27/28</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pago" class="col-sm-3 col-form-label">Tipo de Pago:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="pago" name="pago">
                                <option value="TRANSFERENCIA">Transferencia</option>
                                <option value="EFECTIVO">Efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telefono" class="col-sm-3 col-form-label">Contacto:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="persona" class="col-sm-3 col-form-label">Tipo de Persona:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="persona" name="persona">
                                <option value="ADULTO">Adulto</option>
                                <option value="NIÑO">Niño</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
