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
        # Realizar una consulta que obtenga el último tour de un artista.
        # La tabla tours tiene el nombre del tour, la fecha de inicio y fecha de termino
        # La tabla eventos tiene el nombre del artista y el nombre del evento
        # El nombre del evento es el mismo que el nombre del tour
        # Si hay muchos eventos con el mismo nombre en la tabla eventos, entonces ese nombre aparece en la tabla tours
        # Realizar la consulta usando el nombre del artista
        # Realizar el match entre la tabla eventos y la tabla tours usando el nombre del evento
        # La consulta debe retornar el nombre del tour, la fecha de inicio y la fecha de termino
        # La consulta debe ser case insensitive
        $query = "SELECT tour, fecha_inicio, fecha_termino, id_tour FROM tours WHERE tour IN (SELECT evento FROM eventos WHERE LOWER(nombre_artista) LIKE LOWER('%$artista%'));";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre tour</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Fecha de término</th>
                    <th scope="col">ID tour</th>
                </tr>
            </thead>
            <tbody>
                <?php
                # Si la consulta está vacía, mostrar que el artista no se ha hospedado en ningún hotel.
                if ($usuarios == NULL) {
                    echo "<tr><td>El artista no tiene ningún tour.</td></tr>";
                }
                # Si la consulta no está vacía, mostrar el los datos del tour más reciente
                else {
                    foreach ($usuarios as $u) {
                        echo "<tr><td>$u[0]</td><td>$u[1]</td><td>$u[2]</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>