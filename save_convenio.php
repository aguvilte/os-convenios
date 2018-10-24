<?php

include 'config/db.php';

$prestador = utf8_decode($_POST['prestador']);
$nombre_resp = utf8_decode($_POST['nombre-resp']);
$cargo = utf8_decode($_POST['cargo']);
$archivo_1 = $_FILES['archivo-1'];
$archivo_2 = $_FILES['archivo-2'];
$archivo_3 = $_FILES['archivo-3'];
$porcentaje_aumento = $_POST['porcentaje'];
$fecha_desde = $_POST['fecha-desde'];
$fecha_hasta = $_POST['fecha-hasta'];

try {
    $conexion = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ruta_1 = "./uploads/" . $archivo_1['name'];
    $ruta_2 = "./uploads/" . $archivo_2['name'];
    $ruta_3 = "./uploads/" . $archivo_3['name'];

    move_uploaded_file($archivo_1['tmp_name'], $ruta_1);
    move_uploaded_file($archivo_2['tmp_name'], $ruta_2);
    move_uploaded_file($archivo_3['tmp_name'], $ruta_3);

    $sql = $conexion->prepare(
        'INSERT INTO convenios (
            prestador,
            nombre_resp,
            cargo,
            ruta_1,
            ruta_2,
            ruta_3,
            porcentaje_aumento,
            fecha_desde,
            fecha_hasta
        ) VALUES (
            "' . $prestador . '",
            "' . $nombre_resp . '",
            "' . $cargo . '",
            "' . $ruta_1 . '",
            "' . $ruta_2 . '",
            "' . $ruta_3 . '",
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