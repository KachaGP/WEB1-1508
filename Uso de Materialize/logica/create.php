<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ./create.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
include ('../header.php');?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar usuario</h1>
    <form method="POST" action="create.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>
         <div style="display: flex; gap: 20px; align-items: center; margin-top: 20px;">
    <button class="btn waves-effect waves-light light-green darken-2" type="submit">
      Agregar Usuario
    </button>

    <a href="../index.php" class="btn red lighten-1 waves-effect waves-light">
      Volver a la lista
    </a>
  </div>
</form>
</body>
</html>

 </div>
 <br> <br>
<div>

<?php include ('../footer.php'); ?>