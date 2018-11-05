$('#input-fecha-desde').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd/mm/yyyy',
});
$('#input-fecha-hasta').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd/mm/yyyy',
});

myVar = setInterval(function() {
    inputCuitPrestadorVal = document.getElementById('input-cuit-prestador').value;
    inputNombrePrestadorVal = document.getElementById('input-nombre-prestador').value;
    inputNombreRespVal = document.getElementById('input-nombre-resp').value;
    inputCargoVal = document.getElementById('input-cargo').value;
    inputHabMunicipalVal = document.getElementById('input-archivo-hab-municipal').value;
    inputHabSaludPublicaVal = document.getElementById('input-archivo-hab-salud-publica').value;
    inputSeguroVal = document.getElementById('input-archivo-seguro').value;
    inputPorcentajeVal = document.getElementById('input-porcentaje').value;
    inputFechaDesdeVal = document.getElementById('input-fecha-desde').value;
    inputFechaHastaVal = document.getElementById('input-fecha-hasta').value;

    if (
        inputCuitPrestadorVal != '' &&
        inputNombrePrestadorVal != '' &&
        inputNombreRespVal != '' &&
        inputCargoVal != '' &&
        inputHabMunicipalVal != '' &&
        inputHabSaludPublicaVal != '' &&
        inputSeguroVal != '' &&
        inputPorcentajeVal != '' &&
        inputFechaDesdeVal != '' &&
        inputFechaHastaVal != ''
    ) {
        $('#btn-submit').attr('disabled', false);
    } else {
        $('#btn-submit').attr('disabled', true);
    }
}, 10);

$('#btn-submit').click(function() {
    var fechaDesde = document.getElementById('input-fecha-desde').value.split('/');
    var newFechaDesde = fechaDesde.reverse().join('-');
    var fechaHasta = document.getElementById('input-fecha-hasta').value.split('/');
    var newFechaHasta = fechaHasta.reverse().join('-');

    document.getElementById('input-fecha-desde').value = newFechaDesde;
    document.getElementById('input-fecha-hasta').value = newFechaHasta;
});

// $('#input-cuit-prestador').change(function() {
//     $valorCuit = $(this).val();
//     $.ajax({
//         type: 'GET',
//         url: 'http://prestadoresosunlar.unlar.edu.ar:88/test.php?ConsultarProveedor',
//         data: {
//             CUIT: $valorCuit
//         },
//         dataType: 'json',
//         success: function(data) {
//             $('#input-nombre-prestador').val(data[0].Prov_Nombre);
//         }
//     });
// });