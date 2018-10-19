<?php

include 'config/db.php';

$prestador = utf8_decode($_POST['prestador']);
$nombre_resp = utf8_decode($_POST['nombre-resp']);
$cargo = utf8_decode($_POST['cargo']);
$porcentaje_aumento = $_POST['porcentaje'];
$fecha_desde = $_POST['fecha-desde'];
$fecha_hasta = $_POST['fecha-hasta'];

try {
    $con = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $con->prepare(
        'INSERT INTO convenios (
            prestador,
            nombre_resp,
            cargo,
            porcentaje_aumento,
            fecha_desde,
            fecha_hasta
        ) VALUES (
            "' . $prestador . '",
            "' . $nombre_resp . '",
            "' . $cargo . '",
            ' . $porcentaje_aumento . ',
            "' . $fecha_desde . '",
            "' . $fecha_hasta . '"
        )'
    );
    $sql->execute();

} catch (PDOException $e) {
    $mensaje = $e->getMessage();
    echo $mensaje;
}

?>