    <!-- Modal de enviar mensaje por WhatsApp -->
    <div class="modal fade" id="enviarMensajeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar mensaje por WhatsApp</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="whatsappForm">
                        <div class="mb-3">
                            <label for="telefonoInput" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefonoInput" placeholder="Teléfono del destinatario">
                        </div>
                        <div class="mb-3">
                            <label for="mensajeInput" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensajeInput" rows="6" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="enviarMensajeBtn">Enviar mensaje</button>
                </div>
            </div>
        </div>
    </div>
