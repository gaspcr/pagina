<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Entrega 02</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <?php
        require("../config/conexion.php");
        # realiza una consulta que obtenga las entradas de cortesía de el artista ingresado
        # realizar match en tabla entradas con el nombre del artista ingresado
        # like para que no sea case sensitive
        $artista = $_POST["artista"];
        $query = "SELECT entradas.artista, entradas.asiento, artista.nombre FROM entradas, artista WHERE artista.nombre LIKE '%$artista%' = entradas.artista;";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

    <div class="table">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr> 
                    <th scope="col"> Nombre Artista</th>
                    <th scope="col"> Cantidad de entradas vendidas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        dss
                        <td scope="row"><?php echo $u[0] ?></td>
                        <td scope="row"><?php echo $u[1] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="../index.php" class="btn btn-primary">Volver</a>
</body>
</html>
