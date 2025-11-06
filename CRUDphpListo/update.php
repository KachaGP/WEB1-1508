<?php
include('./logica/db.php');

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
    header("Location: index.php");
    exit;
}
?>

<h1>Editar Usuario</h1>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Nombre: <br><input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
    Email: <br><input type="text" name="email" value="<?php echo $email; ?>"><br>
    Teléfono: <br><input type="text" name="telefono" value="<?php echo $telefono; ?>"><br><br>
    <input type="submit" name="actualizar" value="Actualizar Usuario">
</form>

<a href="index.php">Volver a la lista</a>
