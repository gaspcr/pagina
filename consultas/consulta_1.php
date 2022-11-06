<body>
    <?php
        require("../config/conexion.php");
        # realiza una consulta que obtenga el nombre y telefono de todos los artistas
        $query = "SELECT nombre, contacto FROM artistas;";
        $result = $db -> prepare($query);
        $result -> execute();
        $usuarios = $result -> fetchAll();
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
        <?php
            foreach ($usuarios as $usuario) {
                echo "<tr><td>$usuario[0]</td><td>$usuario[1]</td></tr>";
            }
        ?>
</body>