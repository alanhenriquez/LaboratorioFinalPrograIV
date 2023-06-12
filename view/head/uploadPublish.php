<?php
// Obtener los valores enviados desde el formulario
$tipoPublicacion = $_POST['tipoPublicacion'];
$imagenProducto = $_FILES['imagenProducto']['tmp_name'];
$descripcion = $_POST['descripcion'];
$habilidad = $_POST['habilidad'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];

// Leer la imagen en formato de Base64
$imagenBase64 = base64_encode(file_get_contents($imagenProducto));

// Configurar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donations";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO juguetes (tipo_publicacion, imagen_producto, descripcion, habilidad, edad, genero)
        VALUES ('$tipoPublicacion', '$imagenBase64', '$descripcion', '$habilidad', '$edad', '$genero')";

if ($conn->query($sql) === true) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
