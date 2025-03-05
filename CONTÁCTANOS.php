
<head>
    <title>Contáctanos</title>
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background-color: #000;
            color:  #66ffff;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 4px;
            box-shadow: 3px 4px 10px #66ffff;
        }

        label {
            display: block;
            font-size: 20px;
            margin: 20px 0;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border: 2px solid #1f1f1f;
            background-color: #000;
            color: #fff;
            padding: 10px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="tel"]:hover,
        textarea:hover {
            border-color: #66ffff;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            border-color: #00ff00;
        }

        #contactForm {
            margin: 0 auto;
            max-width: 400px;
        }

        #mensajeEnviado {
            display: none;
            font-size: 24px;
            margin: 20px 0;
        }
        input[type="submit"] {
            background-color: #66ffff;
            color: #000000;
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #333333;
            box-shadow: 3px 4px 10px #66ffff;
            color: #66ffff;
        }
        /* Estilos CSS para el modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #000;
            color: #fff;
            padding: 20px;
            width: 80%;
            max-width: 400px;
            margin: 100px auto;
            text-align: center;
            border: 2px solid #66ffff; /* Borde rojo con estilo gamer */
        }

        /* Estilo para el botón "Cerrar" del modal */
        .close {
            color: #66ffff;
            float: right;
            font-size: 24px;
            cursor: pointer;
        }

        /* Estilo de hover para el modal */
        .modal-content:hover {
            background-color: #323131; /* Cambio de color de fondo al pasar el mouse sobre el modal */
            box-shadow: 5px 5px 10px  #00ffff;
        }
    </style>
</head>
<body>
    <h1>Contáctanos</h1>
    <form id="contactForm">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" required><br><br>

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required><br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <div class="modal" id="mensajeModal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <p>Gracias por contactarte con nosotros. 
                En breve nos comunicaremos contigo.</p>
        </div>
    </div>

    <script>
        // Función para mostrar el modal
        function mostrarModal() {
            document.getElementById('mensajeModal').style.display = 'block';
        }

        // Función para cerrar el modal
        function cerrarModal() {
            document.getElementById('mensajeModal').style.display = 'none';
            window.location.href = 'INTERFAZ.php'; // Redirige a la pagina principal.
        }

        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            mostrarModal();
        });
    </script>
</body>
