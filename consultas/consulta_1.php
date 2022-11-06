<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
        # realiza una consulta que obtenga el nombre y telefono de todos los artistas
        $query = "SELECT nombre, contacto FROM artistas;";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>
    <div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr scope="col"> Nombre Artista</tr>
            <tr scope="col"> Contacto Artista</tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td scope="row"><?php echo $u[0] ?></td>
                    <td scope="row"><?php echo $u[1] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>