// db.php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libreria"; // Cambia por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
