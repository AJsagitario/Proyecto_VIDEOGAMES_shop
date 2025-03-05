<?php

require_once('BD.php'); // Incluye el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Obtiene la conexión a la base de datos
    $con = getConexion();

    $nombre = mysqli_real_escape_string($con, $nombre); // Evita inyección SQL
    $email = mysqli_real_escape_string($con, $email);
    $contrasena = mysqli_real_escape_string($con, $contrasena);

    $query = "INSERT INTO usuario (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contrasena')";

    if (mysqli_query($con, $query)) {
        // Registro exitoso, redirige al inicio de sesión o a la página principal
        //header('Location: login.php');
        echo '<a href="INTERFAZ.php">IR AL INICIO</a>';
    } else {
        // Error en el registro, muestra un mensaje de error
        echo 'Error en el registro. Inténtalo de nuevo.';
    }

    // Cierra la conexión a la base de datos
    mysqli_close($con);
}
?>



