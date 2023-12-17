<?php
// Lógica para validar el usuario y contraseña al momento de ingresar
// Puedes comparar los datos ingresados con los de la base de datos

include("conexion.php");

// Recibir datos del formulario de ingreso
    $Username = $_POST['username'];
    $Contrasena = $_POST['contrasena'];

    // Consultar si el usuario y la contraseña coinciden en la base de datos
    $sql = "SELECT * FROM usuario WHERE usuario='$Username' AND contrasena='$Contrasena'";
    $result = $conex->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Usuario validado exitosamente');</script>";
        header("Location: ../presentacion.html");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        header("Location: ../index.html");
    }

$conex->close();
?>