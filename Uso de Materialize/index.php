 <?php include('header.php');?>
 
<!-- Aqui va la base de datos -->
    <div class="container">
    </div>
  </div>

  <div class="container">
    <div class="section">
     
<?php
    include('./logica/db.php');
    $consulta= "SELECT * FROM usuarios";
    $result = $conn->query($consulta);
?>

    <h1>Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
                <a href="./logica/update.php?id=<?php echo $row['id']; ?>"><img src="./multimedia/editar.ico" width='20%' alt=""></a>
                <a href="./logica/delete.php?id=<?php echo $row['id']; ?>"><img src="./multimedia/eliminar.ico" width='18%' alt=""></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <br><br>
  </div>

  <?php include('footer.php');?>
</html>
