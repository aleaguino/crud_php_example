<?php
include('db.php');

// Datos del libro que quieres crear
$titulo = "Cien años de soledad";
$autor = "Gabriel García Márquez";
$publicacion_year = 1967;
$genero = "Realismo mágico";
$precio = 19.99;

// SQL para insertar un nuevo libro
$sql = "INSERT INTO libro (titulo, autor, publicacion_year, genero, precio)
        VALUES ('$titulo', '$autor', '$publicacion_year', '$genero', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo libro creado exitosamente\n";
} else {
    echo "Error: " . $sql . "\n" . $conn->error . "\n";
}

$conn->close();
?>
