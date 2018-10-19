<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="save_convenio.php" method="post" id="form-convenio" name="form-convenio">
        <div class="container">
            <div class="row form-group">
                <label for="input-prestador">Prestador</label>
                <input type="text" class="form-control" id="input-prestador" name="prestador">
            </div>
            <div class="row form-group">
                <label for="input-nombre-resp">Nombre responsable</label>
                <input type="text" class="form-control" id="input-nombre-resp" name="nombre-resp">
            </div>
            <div class="row form-group">
                <label for="input-cargo">Cargo</label>
                <input type="text" class="form-control" id="input-cargo" name="cargo">
            </div>
            <div class="row form-group">
                <label for="input-archivo-1">Archivo 1</label>
                <input type="file" class="form-control-file" id="input-archivo-1" name="archivo-1">
            </div>
            <div class="row form-group">
                <label for="input-archivo-2">Archivo 2</label>
                <input type="file" class="form-control-file" id="input-archivo-2" name="archivo-2">
            </div>
            <div class="row form-group">
                <label for="input-archivo-3">Archivo 3</label>
                <input type="file" class="form-control-file" id="input-archivo-3" name="archivo-3">
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
            <div class="form-submit" style="text-align: center; margin-top: 50px;">
                <input id="btn-submit" type="submit" class="btn btn-success" value="Guardar">
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>