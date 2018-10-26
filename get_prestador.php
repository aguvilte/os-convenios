<?php

include 'config/db.php';

$cuit = $_GET['cuit'];

try {
    $conexion = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conexion->prepare('SELECT nombre, cbu, numero_cuenta FROM prestadores WHERE cuit = "' . $cuit . '"');
    $sql->execute();

    if($datos = $sql->fetch(PDO::FETCH_ASSOC)) {
        $nombre = utf8_encode($datos['nombre']);
        $cbu = $datos['cbu'];
        $num_cuenta = $datos['numero_cuenta'];

        $respuesta = '{"nombre": "' . $nombre . '", "cbu": "' . $cbu . '", "num_cuenta": "' . $num_cuenta . '"}';
        echo $respuesta;
    }
    else {
        echo '{"nombre": "", "cbu": "", "numero_cuenta": ""}';
    }

} catch (PDOException $e) {
    $mensaje = $e->getMessage();
    echo $mensaje;
}

?>