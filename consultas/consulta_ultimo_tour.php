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
        # La tabla tours tiene los atributos id_tour, nombre, fecha_inicio, fecha_termino
        # La tabla eventos tiene los atributos evento, artista, 
        # La tabla tours se relaciona con la tabla eventos ya que el nombre del tour es el nombre del evento.
        # En la tabla eventos, un mismo evento puede tener distintas fechas
        # La consulta debe ser case insensitive.
        $query = "SELECT nombre, fecha_inicio, fecha_termino FROM tours WHERE nombre IN (SELECT evento FROM eventos WHERE artista ILIKE '%$artista%') ORDER BY fecha_termino DESC LIMIT 1;";
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