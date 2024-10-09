<?php
include('db.php');

// ID del libro que quieres actualizar
$id = 1;

// Nuevos valores
$nuevo_titulo = "Cien años de soledad (Edición revisada)";
$nuevo_precio = 24.99;

// SQL para actualizar el libro
$sql = "UPDATE libro SET titulo='$nuevo_titulo', precio='$nuevo_precio' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Libro actualizado exitosamente\n";
} else {
    echo "Error actualizando el libro: " . $conn->error . "\n";
}

$conn->close();
?>
