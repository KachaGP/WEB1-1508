<?php
    include('./Logica/conexion.php');
    $consultaSQL = 'SELECT * FROM crud_app.usuarios';

    $resultado = $conexion -> query($consultaSQL);
    if($resultado) {
        echo " Con datos";
    }else{
        echo " Sin datos";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de datos</title>
</head>
<body>
    <div>
        <h1>Lista de datos</h1>
    </div>
    <hr>
        <div>
            <table border = "1">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            <?php while($row = $resultado -> fetch_assoc()) {?>
                <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['nombre']; ?></td> <!-- Nombre -->
                    <td> <?php echo $row['email']; ?></td> <!-- Email -->
                    <td><?php echo $row['telefono']; ?></td> <!-- Telefono -->
                    <td>
                        <a href="Editar">Editar</a>
                        <a href="Eliminar">Eliminar</a>
                    </td> <!-- Anclas -->
                </tr>
                <?php  }?>
            </table>
        </div>

</body>
</html>