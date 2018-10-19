$('#input-fecha-desde').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd/mm/yyyy',
});
$('#input-fecha-hasta').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd/mm/yyyy',
});

myVar = setInterval(function() {
    inputPrestadorVal = document.getElementById('input-prestador').value;
    inputNombreRespVal = document.getElementById('input-nombre-resp').value;
    inputCargoVal = document.getElementById('input-cargo').value;
    // inputArchivo1Val = document.getElementById('input-archivo-1').value;
    // inputArchivo2Val = document.getElementById('input-archivo-2').value;
    // inputArchivo3Val = document.getElementById('input-archivo-3').value;
    inputPorcentajeVal = document.getElementById('input-porcentaje').value;
    inputFechaDesdeVal = document.getElementById('input-fecha-desde').value;
    inputFechaHastaVal = document.getElementById('input-fecha-hasta').value;

    if (
        inputPrestadorVal != '' &&
        inputNombreRespVal != '' &&
        inputCargoVal != '' &&
        // inputArchivo1 != '' &&
        // inputArchivo2 != '' &&
        // inputArchivo3 != '' &&
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