<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSUNLaR - Agregar convenio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <form action="save_convenio.php" method="post" id="form-convenio" name="form-convenio" enctype="multipart/form-data">
        <?php include './cabecera.php'; ?>
        <div class="container container-table-index">
            <h2 id="titulo-principal">Listado de convenios</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Prestador</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Porcentaje aumento</th>
                            <th scope="col">Fecha desde</th>
                            <th scope="col">Fecha hasta</th>
                            <th scope="col">Ver detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include './get_convenios.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script>
    </script>
</body>
</html>