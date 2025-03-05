<style>
    /* Estilo general del formulario y la página */
    body {
        background-color: #000;
        color: #fff;
        font-family: "Arial", sans-serif;
    }

    #registro-form {
        text-align: center;
        padding: 150px;
        max-width: 2000px; /* Establece el ancho máximo del formulario */
        margin: 0 auto; /* Centra el formulario en la página */
        height: 200px; /* El formulario se expandirá automáticamente según el contenido */
        
    }

    /* Estilo de los elementos del formulario */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
        background-color: #333;
        color: #fff;
        border: 2px solid #33ffff;
        border-radius: 5px;
        padding: 10px;
        margin: 5px;
        width: 100%;
        transition: background-color 0.3s, border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        background-color: #444;
        border-color: #33ffff;
    }

    button[type="submit"] {
        background-color: #66ffff;
        color: #000000;
        border: none;
        border-radius: 5px;
        padding: 20px 40px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #000000;
        color: #33ffff;
        border-color: #00ffff;
        box-shadow: 8px 5px 8px #33ffff;
    }
</style>
<head>
    <title>Registro</title>
</head>
<body>
    <div id="registro-form" >
        <form action="REGISTRO.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>

