<?php

include 'config/db.php';

try {
    $conexion = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $dbuser, $dbpass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conexion->prepare('SELECT * FROM convenios INNER JOIN prestadores on convenios.prestador = prestadores.cuit');
    $sql->execute();

    $i = 0;
    while($datos = $sql->fetch(PDO::FETCH_ASSOC)) {
        $i++;
        
        // TABLA CONVENIOS
        $id_convenio = $datos['id'];
        $cuit_prestador = $datos['prestador'];
        $nombre_resp = $datos['nombre_resp'];
        $email_resp = $datos['email_resp'];
        $cargo = $datos['cargo'];
        $porcentaje = $datos['porcentaje_aumento'];
        $fecha_desde = $datos['fecha_desde'];
        $fecha_desde_format = date('d/m/Y', strtotime($fecha_desde));
        $fecha_hasta = $datos['fecha_hasta'];
        $fecha_hasta_format = date('d/m/Y', strtotime($fecha_hasta));

        // TABLA PRESTADORES
        $nombre_prestador = utf8_encode($datos['nombre']);
        $cbu_prestador = $datos['cbu'];
        $num_cuenta_prestador = $datos['numero_cuenta'];

        $respuesta = '
            <tr>
                <th scope="row">' . $i . '</th>
                <td>' . $nombre_prestador . '</td>
                <td>' . $nombre_resp . '</td>
                <td>' . $porcentaje . '%</td>
                <td>' . $fecha_desde_format . '</td>
                <td>' . $fecha_hasta_format . '</td>
                <td>
                    <button value="' . $i . '" class="btn btn-default btn-fawesome" type="button" data-toggle="collapse" data-target="#collapse' . $i . '" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </td>
                <td>
                    <a href="./update.php?convenio=' . $id_convenio . '">
                        <i class="fas fa-align-justify"></i>
                    </a>
                </td>
            </tr>
            <tr class="td-oculto" id="detallado-' . $i . '">
                <td colspan="7">
                    <div class="collapse" id="collapse' . $i . '">
                        <div class="card card-body">
                            <p><b>Nombre de prestador</b>: ' . $nombre_prestador . '</p>
                            <p><b>CUIT de prestador</b>: ' . $cuit_prestador . '</p>
                            <p><b>CBU de prestador</b>: ' . $cbu_prestador . '</p>
                            <p><b>Número de cuenta de prestador</b>: ' . $num_cuenta_prestador . '</p>
                            <p><b>Nombre de responsable</b>: ' . $nombre_resp . '</p>
                            <p><b>E-mail de responsable</b>: ' . $email_resp . '</p>
                            <p><b>Cargo</b>: ' . $cargo . '</p>
                            <p><b>Porcentaje</b>: ' . $porcentaje . '%</p>
                            <p><b>Fecha desde</b>: ' . $fecha_desde_format . '</p>
                            <p><b>Fecha hasta</b>: ' . $fecha_hasta_format . '</p>
                        </div>
                    </div>
                </td>
            </tr>
        ';
        echo $respuesta;
    }

} catch (PDOException $e) {
    $mensaje = $e->getMessage();
    echo $mensaje;
}

?>
