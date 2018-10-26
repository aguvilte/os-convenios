<?php

include 'config/db.php';

$prestador = utf8_decode($_POST['cuit-prestador']);
$nombre_resp = utf8_decode($_POST['nombre-resp']);
$email_resp = utf8_decode($_POST['email-resp']);
$cargo = utf8_decode($_POST['cargo']);
$hab_municipal = $_FILES['archivo-hab-municipal'];
$hab_salud_publica = $_FILES['archivo-hab-salud-publica'];
$seguro = $_FILES['archivo-seguro'];
$porcentaje_aumento = $_POST['porcentaje'];
$fecha_desde = $_POST['fecha-desde'];
$fecha_hasta = $_POST['fecha-hasta'];

try {
    $conexion = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ruta_hab_municipal = "./uploads/" . $hab_municipal['name'];
    $ruta_hab_salud_publica = "./uploads/" . $hab_salud_publica['name'];
    $ruta_seguro = "./uploads/" . $seguro['name'];

    move_uploaded_file($hab_municipal['tmp_name'], $ruta_hab_municipal);
    move_uploaded_file($hab_salud_publica['tmp_name'], $ruta_hab_salud_publica);
    move_uploaded_file($seguro['tmp_name'], $ruta_seguro);

    $sql = $conexion->prepare(
        'INSERT INTO convenios (
            prestador,
            nombre_resp,
            email_resp,
            cargo,
            ruta_hab_municipal,
            ruta_hab_salud_publica,
            ruta_seguro,
            porcentaje_aumento,
            fecha_desde,
            fecha_hasta
        ) VALUES (
            "' . $prestador . '",
            "' . $nombre_resp . '",
            "' . $email_resp . '",
            "' . $cargo . '",
            "' . $ruta_hab_municipal . '",
            "' . $ruta_hab_salud_publica . '",
            "' . $ruta_seguro . '",
            ' . $porcentaje_aumento . ',
            "' . $fecha_desde . '",
            "' . $fecha_hasta . '"
        )'
    );
    if($sql->execute()) {
        header('Location: ./index.php');
    };

} catch (PDOException $e) {
    $mensaje = $e->getMessage();
    echo $mensaje;
}

?>