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
                # Si la consulta está vacía, mostrar que el artista no se ha hospedado en ningún hotel.
                if ($usuarios == NULL) {
                    echo "<tr><td>El artista no se ha hospedado en ningún hotel.</td></tr>";
                }
                # Si la consulta no está vacía, mostrar los hoteles en los que se ha hospedado el artista.
                else {
                    foreach ($usuarios as $usuario) {
                        echo "<tr><td>$usuario[0]</td><td>$usuario[1]</td><td>$usuario[2]</td><td>1</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>