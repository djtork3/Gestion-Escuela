$(document).ready(function() {
    $('#enviarMensajeBtn').click(function() {
        var telefono = $('#telefonoInput').val();
        var mensaje = $('#mensajeInput').val();
    
        // Formato de URL para enviar mensaje por WhatsApp
        var url = 'https://api.whatsapp.com/send?phone=' + telefono + '&text=' + encodeURIComponent(mensaje);
    
        // Abrir la URL en una nueva ventana o pestaña
        window.open(url, '_blank');
    });

    $('.mensaje-btn').click(function() {
        var telefono = $(this).data('telefono');
        var nombre = $(this).data('nombre');
        var meses = $(this).data('meses');
        var total = $(this).data('total');

        var mensajePredeterminado = "AVISO ESCUELA DE TENIS\n====================\n";
        mensajePredeterminado += "Se informa que puede abonar el importe pendiente del mes de " + meses + " que asciende a " + total + " Euros ";
        mensajePredeterminado += "en la oficina de la Federación de Lunes a Viernes en horario de 18 a 20 horas y Sábado a Domingo de 11 a 13 h o mediante transferencia a la cuenta del BANCO DE SANTANDER ";
        mensajePredeterminado += "ES23-0049-2506-1626-1416-2202. ";
        mensajePredeterminado += "En el ASUNTO poner: “" + meses + "” y a continuación el nombre “" + nombre + "”.  ";
        mensajePredeterminado += "Se ruega que para contabilizar el cobro, una vez realizada la transferencia, remitan a vuelta de este mensaje una captura o imagen de la operación. ";
        mensajePredeterminado += "Muchas Gracias.";

        $('#mensajeInput').val(mensajePredeterminado);
        $('#telefonoInput').val(telefono);
    });
});