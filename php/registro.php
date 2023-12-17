<?php
include("conexion.php");

// SQL para crear la tabla si no existe
$sqlTabla = "CREATE TABLE IF NOT EXISTS usuario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    contrasena VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conex->query($sqlTabla) === FALSE) {
    echo "Error al crear la tabla: " . $conex->error;
}

// Recibir datos del formulario de registro
$Username = $_POST["username"];
$Email = $_POST["email"];
$Contrasena = $_POST["contrasena"];

// Insertar usuario en la base de datos
$sql = "INSERT INTO usuario (usuario, email, contrasena) VALUES ('$Username', '$Email', '$Contrasena')";

$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    echo "<script>alert('Usuario registrado exitosamente');</script>";
    header("Location: ../presentacion.html");
} else {
    echo "<script>alert('Error al registrar usuario');</script>";
    header("Location: ../index.html");
}

$conex->close();
?>
