<?php
include("conexion.php");

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