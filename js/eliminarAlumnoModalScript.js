$(document).ready(function() {
    var alumnoIDToDelete;

    // Mostrar modal de confirmación al hacer clic en el botón Eliminar
    $('.delete').click(function() {
        alumnoIDToDelete = $(this).data('alumno-id'); // Obtener el ID del alumno
        var nombreAlumno = $(this).closest('tr').find('td:eq(0)').text(); // Obtener el nombre del alumno
        $('#deleteModalBody').html('¿Estás seguro de que deseas eliminar al alumno <strong>' + nombreAlumno + '</strong>?');
        $('#eliminarAlumnoModal').modal('show');
    });

    // Eliminar Alumno cuando se confirme desde el modal
    $('#confirmDeleteBtn').click(function() {
        if (alumnoIDToDelete) {
            $.ajax({
                url: 'acciones/delete.php',
                type: 'GET',
                data: { ID: alumnoIDToDelete },
                success: function(response) {
                    // Recargar la página después de eliminar el alumno
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        $('#eliminarAlumnoModal').modal('hide');
    });
});