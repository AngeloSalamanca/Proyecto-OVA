<?php
//    $conex = mysqli_connect("localhost","root","","usuarios");

    // if($conex){
    //     echo "Conexion exitosa";
    // }else{
    //     echo "ERROR";
    // }
$servername = "database-1.cr83cdsrhghv.us-east-2.rds.amazonaws.com"; // Endpoint de RDS
$username = "admin"; // Usuario de RDS
$password = "oU8RJC4ZaRlxjFFJzXT3"; // Contraseña de RDS
$dbname = "database-1"; // Nombre de la base de datos
$port = 3306;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>