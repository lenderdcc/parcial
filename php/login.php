<?php
// Código para realizar la conexión a la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "formulario"; // Nombre de la base de datos

// Crea una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Iniciar sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos los datos enviados por el usuario
    $email = $_POST['email'];
    $pass = $_POST['contrase'];

    // Verificar si el usuario ya existe
    $sql = "SELECT * FROM registro WHERE email='$email' AND contra='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario existe, crea una sesión para él y redirige a la página principal
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $row['nombre']; // Guarda el nombre de usuario en la sesión
        header('Location: ../html/index.php');
        exit;
    } else {
        // Si los datos son incorrectos, muestra un mensaje de error
        $_SESSION['mensaje'] = 'Correo o contraseña incorrectos';
        header('Location: ../inicio.html');
        exit;
    }
}
?>