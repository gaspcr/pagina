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
        # Realizar una consulta que obtenga los hoteles en los que se ha hospedado el artista ingresado.
        # Utilizar tabla hospedajes_traslados
        # La tabla hospedajes_traslados contiene el nombre del hotel, el nombre del artista, el hotel y el código de la reserva.
        # La consulta debe tener además el código de la reserva para contar la cantidad de veces que se ha hospedado el artista en el hotel.
        # No existe tabla hotel, por lo que se debe utilizar la tabla hospedajes_traslados.
        # La consulta debe ser case insensitive.
        $query = "SELECT DISTINCT hospedajes_traslados.nombre_hotel, hospedajes_traslados.artista, hospedajes_traslados.codigo_reserva FROM hospedajes_traslados WHERE hospedajes_traslados.artista ILIKE '%$artista%';";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Código de reserva</th>
                    <th scope="col">Cantidad de veces que se ha hospedado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $p) {
                        echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>codigo</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>