<body>
    <?php
        require("../config/conexion.php");
        # realiza una consulta que obtenga el nombre y telefono de todos los artistas
        $query = "SELECT nombre, contacto FROM artistas;";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>
    <table class="table table-bordered" style="width: 50%; margin: 0 auto;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Contacto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u[0] ?></td>
                    <td><?php echo $u[1] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>