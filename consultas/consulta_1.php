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
    <table class="table table-bordered"; margin: 0 auto;>
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