<?php
// Lógica para validar el usuario y contraseña al momento de ingresar
// Puedes comparar los datos ingresados con los de la base de datos

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario de ingreso
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consultar si el usuario y la contraseña coinciden en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Usuario validado exitosamente";
        header("Location: ../presentacion.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}

$conn->close();
?>