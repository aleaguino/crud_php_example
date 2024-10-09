<?php
include('db.php');

// SQL para obtener todos los libros
$sql = "SELECT * FROM libro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir cada libro
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Título: " . $row["titulo"] . " - Autor: " . $row["autor"] . " - Año: " . $row["publicacion_year"] . " - Género: " . $row["genero"] . " - Precio: $" . $row["precio"] . "\n";
    }
} else {
    echo "No hay libros en la base de datos.\n";
}

$conn->close();
?>
