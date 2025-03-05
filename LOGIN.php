<?php

require_once('BD.php'); // Incluye el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Obtiene la conexión a la base de datos
    $con = getConexion();

    $email = mysqli_real_escape_string($con, $email); // Evita inyección SQL
    $contrasena = mysqli_real_escape_string($con, $contrasena);

    $query = "SELECT codigo, nombre FROM usuario WHERE email = '$email' AND contraseña = '$contrasena'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) === 1) {
        // Inicio de sesión exitoso, redirige a la página principal o al carrito
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['usuario_codigo'] = $row['codigo'];
        $_SESSION['usuario_nombre'] = $row['nombre'];
        header('Location: INTERFAZ_2.php');
    } else {
        // Inicio de sesión fallido, muestra un mensaje de error
        echo 'Inicio de sesión fallido. Verifica tus credenciales.';
    }

    // Cierra la conexión a la base de datos
    mysqli_close($con);
}
?>



