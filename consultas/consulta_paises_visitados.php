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
        # Obtener los países visitados en un tour
        # La tabla tour tiene los atributos id_tour, tour, fecha_inicio, fecha_termino
        # La tabla eventos tiene los atributos id_evento, evento, artista, pais
        # El nombre del tour es el mismo que el nombre del evento
        # La consulta debe ser case insensitive
        $query = "SELECT DISTINCT pais FROM eventos WHERE evento IN (SELECT nombre FROM tours WHERE nombre IN (SELECT evento FROM eventos WHERE artista ILIKE '%$artista%'));";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Tour</th>
                    <th scope="col">Paise visitado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                # Si la consulta está vacía, mostrar que el artista no se ha hospedado en ningún hotel.
                if ($usuarios == NULL) {
                    echo "<tr><td>Ups!, parece que este tour no existe</td></tr>";
                }
                # Si la consulta no está vacía, mostrar el los datos del tour más reciente
                else {
                    foreach ($usuarios as $u) {
                        echo "<tr><td>$u[0]</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>