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
    $email = $_POST['email'];
    $pass = $_POST['contrase'];

    // Verificar si el usuario ya existe
$sql = "SELECT * FROM registro WHERE email='$email' OR contra='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // El usuario ya existe en la base de datos
echo "El usuario ya está registrado. Por favor, ingrese un email diferente";
 
} else {
  // El usuario no existe en la base de datos, insertar registro
  $sql = "INSERT INTO registro (nombre, email, contra) VALUES ('$name', '$email', '$pass')";
  if ($conn->query($sql) === TRUE) {
   header('location:../html/index.html');
  } else {
    echo "El usuario ya está registrado. Por favor, ingrese un email";
  }
}

$conn->close();

}