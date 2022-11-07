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
        $productora = $_POST["productora"];
        # Realiza una consulta que obtenga productoras con la que ha trabajado un artista
        # La tabla eventos tiene al artista, la productora y el evento
        # que la consulta sea case insensitive
        $query = "SELECT DISTINCT productoras.nombre FROM productoras, eventos WHERE eventos.productora = productoras.nombre AND LOWER(productoras.nombre) LIKE LOWER('%$productora%');";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>

        <div class="table">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr> 
                    <th scope="col"> Nombre Artista</th>
                    <th scope="col"> Productora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td scope="row"><?php echo $u[0] ?></td>
                        <td scope="row"><?php echo $u[1] ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
            </tbody>
        </table>
    </div>
            <a href="../index.php" class="btn btn-primary">Volver</a>
    </body>
    </html>