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
        $artista = $_POST["artista"];
        # Realizar una consulta que obtenga productoras asociadas al artista ingresado.
        # Utilizar tabla eventos.
        # La tabla eventos contiene el nombre de la productora, el nombre del artista y el nombre del evento.
        # La consulta debe ser case insensitive.
        $query = "SELECT DISTINCT productoras.nombre FROM productoras, eventos WHERE eventos.productora = productoras.nombre AND eventos.artista ILIKE '%$artista%';";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

        # Mostrar en una tabla la información obtenida.
    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Productora</th>
                    <th scope="col">Artista</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $p) {
                        echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>