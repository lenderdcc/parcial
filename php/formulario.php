<?php

// Código para realizar la conexión a la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "formulario"; // Nombre de la base de datos

// Crea una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos los datos enviados por el usuario

    $name = $_POST['name'];
    $apelli = $_POST['apellido'];
    $correo = $_POST['email'];
    $product = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO formu (nombre, apellido, correo, producto, cantidad, numero, direccion) VALUES ('$name', '$apelli', '$correo', '$product', '$cantidad', '$telefono', '$direccion')";
    $result = $conn->query($sql);

    header('location:../html/index.html');



$conn->close();

}