$(document).ready(function() {
    $('.edit').click(function() {
        var row = $(this).closest('tr');
        var alumnoID = $(this).data('alumno-id');

        $('#editNombre').val(row.find('td:eq(0)').text());
        $('#editMatricula').val(row.find('td:eq(1)').text());
        $('#editLicencia').val(row.find('td:eq(2)').text());
        $('#editOctubre').val(row.find('td:eq(3)').text());
        $('#editNoviembre').val(row.find('td:eq(4)').text());
        $('#editDiciembre').val(row.find('td:eq(5)').text());
        $('#editEnero').val(row.find('td:eq(6)').text());
        $('#editFebrero').val(row.find('td:eq(7)').text());
        $('#editMarzo').val(row.find('td:eq(8)').text());
        $('#editAbril').val(row.find('td:eq(9)').text());
        $('#editMayo').val(row.find('td:eq(10)').text());
        $('#editJunio').val(row.find('td:eq(11)').text());
        $('#editAño').val(row.find('td:eq(12)').text());
        $('#editPago').val(row.find('td:eq(13)').text());
        $('#editTelefono').val(row.find('td:eq(14)').text());
        $('#editID').val(alumnoID);
        $('#editPersona').val(row.find('td:eq(15)').text());
    });

    $('#editDataForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: 'acciones/edit.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // La operación de edición fue exitosa, recarga la página index.php
                    location.reload();
                } else {
                    // Hubo un error al editar los datos, muestra un mensaje de error al usuario
                    console.error('Error al editar datos:', response.error);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});