<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = $conn->query($consulta);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $nombre = $row['nombre'];
        $email = $row['email'];
        $telefono = $row['telefono'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $update = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
    $conn->query($update);
    header("Location: ../index.php");
    exit;
}

include ('../header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Pagina ICO</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<h1>Editar Usuario</h1>

<form method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <label>Nombre:</label><br>
  <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>

  <label>Email:</label><br>
  <input type="text" name="email" value="<?php echo $email; ?>"><br>

  <label>Teléfono:</label><br>
  <input type="text" name="telefono" value="<?php echo $telefono; ?>"><br><br>

   <div style="display: flex; gap: 20px; align-items: center; margin-top: 20px;">
    <button class="btn waves-effect waves-light light-green darken-2" type="submit" name="actualizar">
      Actualizar Usuario
    </button>

    <a href="../index.php" class="btn red lighten-1 waves-effect waves-light">
      Volver a la lista
    </a>
  </div>
</form>

 </div>
 <br> <br>
<div>

<?php include ('../footer.php'); ?>
