    $(document).ready(function() {
        // Open Modal
        $('#openModal').click(function() {
            $('#myModal').removeClass('hidden');
        });

        // Close Modal
        $('#closeModal, .modal-overlay, #cancelButton').click(function() {
            $('#myModal').addClass('hidden');
        });

        // Submit Form via AJAX
        $('#addDataForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: 'acciones/add.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#añadirAlumnoModal').modal('hide');
                    $('#successAlert').fadeIn();
                    setTimeout(function() {
                        $('#successAlert').fadeOut();
                    }, 3000); // Ocultar la alerta después de 3 segundos
                    // Recargar la página después de añadir los datos
                    location.reload();
                }
            });
        });
    });
