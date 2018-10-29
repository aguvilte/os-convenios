<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSUNLaR - Agregar convenio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="save_convenio.php" method="post" id="form-convenio" name="form-convenio" enctype="multipart/form-data">
        <div class="container">
            <h1 id="titulo-principal">Formulario - Agregar convenio</h1>
            <div class="row form-group">
                <label for="input-cuit-prestador">CUIT Prestador</label>
                <input type="text" class="form-control" id="input-cuit-prestador" name="cuit-prestador">
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">Prestador</label>
                <input type="text" class="form-control" id="input-nombre-prestador" name="nombre-prestador" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">CBU Prestador</label>
                <input type="text" class="form-control" id="input-cbu-prestador" name="cbu-prestador" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">Número de cuenta</label>
                <input type="text" class="form-control" id="input-num-cuenta-prestador" name="num-cuenta-prestador" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-resp">Nombre responsable</label>
                <input type="text" class="form-control" id="input-nombre-resp" name="nombre-resp">
            </div>
            <div class="row form-group">
                <label for="input-nombre-resp">E-mail responsable</label>
                <input type="text" class="form-control" id="input-email-resp" name="email-resp">
            </div>
            <div class="row form-group">
                <label for="input-cargo">Cargo</label>
                <input type="text" class="form-control" id="input-cargo" name="cargo">
            </div>
            <div class="row form-group">
                <label for="input-archivo-1">Habilitación municipal</label>
                <input type="file" class="form-control-file" id="input-archivo-hab-municipal" name="archivo-hab-municipal">
            </div>
            <div class="row form-group">
                <label for="input-archivo-2">Habilitación salud pública</label>
                <input type="file" class="form-control-file" id="input-archivo-hab-salud-publica" name="archivo-hab-salud-publica">
            </div>
            <div class="row form-group">
                <label for="input-archivo-3">Seguro</label>
                <input type="file" class="form-control-file" id="input-archivo-seguro" name="archivo-seguro">
            </div>
            <div class="row form-group">
                <label for="input-porcentaje">Porcentaje</label>
                <input type="text" class="form-control" id="input-porcentaje" name="porcentaje"><p>%</p>
            </div>
            <div class="row form-group">
                <label for="input-fecha-desde">Fecha desde</label>
                <input type="text" class="input-fecha" id="input-fecha-desde" name="fecha-desde">
            </div>
            <div class="row form-group">
                <label for="input-fecha-hasta">Fecha hasta</label>
                <input class="input-fecha" id="input-fecha-hasta" name="fecha-hasta">
            </div>
            <div class="form-submit" id="wrapper-btn-submit">
                <input id="btn-submit" type="submit" class="btn btn-success" value="Guardar">
            </div>
        </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/create.js"></script>
</body>
</html>