<?php
$id_convenio = $_GET['convenio'];
include 'config/db.php';

try {
    $conexion = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conexion->prepare('SELECT * FROM convenios INNER JOIN prestadores on convenios.prestador = prestadores.cuit WHERE convenios.id = :id_convenio');
    $sql->execute(array(':id_convenio' => $id_convenio));

    $i = 0;
    while($datos = $sql->fetch(PDO::FETCH_ASSOC)) {
        $i++;

        // TABLA CONVENIOS
        $cuit_prestador = $datos['prestador'];
        $nombre_resp = $datos['nombre_resp'];
        $email_resp = $datos['email_resp'];
        $cargo = $datos['cargo'];
        $ruta_hab_municipal = $datos['ruta_hab_municipal'];
        $ruta_hab_salud_publica = $datos['ruta_hab_salud_publica'];
        $ruta_seguro = $datos['ruta_seguro'];
        $porcentaje = $datos['porcentaje_aumento'];
        $fecha_desde = $datos['fecha_desde'];
        $fecha_desde_format = date('d/m/Y', strtotime($fecha_desde));
        $fecha_hasta = $datos['fecha_hasta'];
        $fecha_hasta_format = date('d/m/Y', strtotime($fecha_hasta));

        // TABLA PRESTADORES
        $nombre_prestador = utf8_encode($datos['nombre']);
        $cbu_prestador = $datos['cbu'];
        $num_cuenta_prestador = $datos['numero_cuenta'];
    }
} catch (PDOException $e) {
    $mensaje = $e->getMessage();
    echo $mensaje;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSUNLaR - Modificar convenio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="save_convenio.php" method="post" id="form-convenio" name="form-convenio" enctype="multipart/form-data">
        <div class="container">
            <h1 id="titulo-principal">Formulario - Modificar convenio</h1>
            <div class="row form-group">
                <label for="input-cuit-prestador">CUIT Prestador</label>
                <input type="text" class="form-control" id="input-cuit-prestador" name="cuit-prestador" value="<?php echo $cuit_prestador ?>">
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">Prestador</label>
                <input type="text" class="form-control" id="input-nombre-prestador" name="nombre-prestador" value="<?php echo $nombre_prestador ?>" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">CBU Prestador</label>
                <input type="text" class="form-control" id="input-cbu-prestador" name="cbu-prestador" value="<?php echo $cbu_prestador ?>" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-prestador">Número de cuenta</label>
                <input type="text" class="form-control" id="input-num-cuenta-prestador" name="num-cuenta-prestador" value="<?php echo $num_cuenta_prestador ?>" readonly>
            </div>
            <div class="row form-group">
                <label for="input-nombre-resp">Nombre responsable</label>
                <input type="text" class="form-control" id="input-nombre-resp" name="nombre-resp" value="<?php echo $nombre_resp ?>">
            </div>
            <div class="row form-group">
                <label for="input-nombre-resp">E-mail responsable</label>
                <input type="text" class="form-control" id="input-email-resp" name="email-resp" value="<?php echo $email_resp ?>">
            </div>
            <div class="row form-group">
                <label for="input-cargo">Cargo</label>
                <input type="text" class="form-control" id="input-cargo" name="cargo" value="<?php echo $cargo ?>">
            </div>
            <div class="row form-group">
                <label for="input-archivo-1">Habilitación municipal</label>
                <input type="file" class="form-control-file" id="input-archivo-hab-municipal" name="archivo-hab-municipal" value="<?php echo $ruta_hab_municipal ?>">
            </div>
            <div class="row form-group">
                <label for="input-archivo-2">Habilitación salud pública</label>
                <input type="file" class="form-control-file" id="input-archivo-hab-salud-publica" name="archivo-hab-salud-publica" value="<?php echo $ruta_hab_salud_publica ?>">
            </div>
            <div class="row form-group">
                <label for="input-archivo-3">Seguro</label>
                <input type="file" class="form-control-file" id="input-archivo-seguro" name="archivo-seguro" value="<?php echo $ruta_seguro ?>">
            </div>
            <div class="row form-group">
                <label for="input-porcentaje">Porcentaje</label>
                <input type="text" class="form-control" id="input-porcentaje" name="porcentaje" value="<?php echo $porcentaje ?>"><p>%</p>
            </div>
            <div class="row form-group">
                <label for="input-fecha-desde">Fecha desde</label>
                <input type="text" class="input-fecha" id="input-fecha-desde" name="fecha-desde" value="<?php echo $fecha_desde_format ?>">
            </div>
            <div class="row form-group">
                <label for="input-fecha-hasta">Fecha hasta</label>
                <input class="input-fecha" id="input-fecha-hasta" name="fecha-hasta" value="<?php echo $fecha_hasta_format ?>">
            </div>
            <div class="form-submit" id="wrapper-btn-submit">
                <input id="btn-submit" type="submit" class="btn btn-success" value="Guardar cambios">
            </div>
        </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/update.js"></script>
</body>
</html>