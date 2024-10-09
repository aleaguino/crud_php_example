<?php
include('db.php');

// ID del libro que quieres eliminar
$id = 1;

// SQL para eliminar el libro
$sql = "DELETE FROM libro WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Libro eliminado exitosamente\n";
} else {
    echo "Error eliminando el libro: " . $conn->error . "\n";
}

$conn->close();
?>
