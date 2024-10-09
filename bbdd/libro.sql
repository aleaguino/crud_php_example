CREATE TABLE libro (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  autor VARCHAR(255) NOT NULL,
  publicacion_year INT,
  genero VARCHAR(100),
  precio DECIMAL(10, 2)
);
