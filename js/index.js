i = 0;

$('.btn-fawesome').click(function() {
    $valor = $(this).val();
    $id = 'detallado-' + $valor;

    // $('.show').removeClass('show');
    // $(this).addClass('show');

    if (i == 0) {
        $('#' + $id).toggleClass('td-oculto');
        i = 1;
    } else {
        setTimeout(() => {
            $('#' + $id).toggleClass('td-oculto');
        }, 180);
        i = 0;
    }
});