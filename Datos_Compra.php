<!DOCTYPE html>
<html>
    <head>
        <title>Datos de Compra</title>
        <title>Información de Compra</title>
        <style>
            /* Estilos CSS aquí */
            /* Estilo para el título de la página */
            h1 {
                text-align: center;
                font-size: 36px;
                color:  #33ffff; /* Color rojo estilo gamer */
                text-transform: uppercase; /* Texto en mayúsculas */
                text-shadow: 2px 2px 0 #000; /* Sombra estilo gamer */
                box-shadow: 5px 2px 8px #000033;
            }

            /* Centrar elementos en la página */
            .container {
                text-align: center;
                max-width: 800px;
                margin: 0 auto;
            }

            /* Estilos para el formulario */
            form {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .form-group {
                flex-basis: 48%;
                margin-bottom: 10px;
            }

            .form-group label {
                display: block;
                font-weight: bold;
                color: #078c8c; /* Color verde estilo gamer */
            }

            /* Estilos para los campos de entrada */
            .form-group input {
                width: 100%;
                padding: 10px;
                border: 2px solid #33ffff; /* Borde verde estilo gamer */
                background-color: #000; /* Fondo negro estilo gamer */
                color:  #33ffff; /* Texto verde estilo gamer */
                font-size: 16px;
                margin-top: 5px;
                border-radius: 5px; /* Bordes redondeados estilo gamer */
                box-shadow: 3px 5px 8px #009999;
            }

            /* Estilos para el hover en los campos de entrada */
            .form-group input:hover {
                background-color: #111; /* Cambio de fondo al pasar el cursor */
            }

            /* Estilos para el resumen del pedido */
            .order-summary {
                margin-top: 20px;
            }

            .order-summary label {
                font-weight: bold;
                color: #078c8c; /* Color verde estilo gamer */
            }

            /* Estilos para las opciones de pago */
            .payment-options {
                margin-top: 20px;
            }

            .payment-options label {
                display: block;
                font-weight: bold;
                color: #078c8c; /* Color verde estilo gamer */
            }

            /* Estilos para el botón */
            button {
                background-color: #000033; /* Rojo estilo gamer */
                color: #33ffff;
                padding: 10px 20px;
                font-size: 18px;
                border: none;
                cursor: pointer;
                border-radius: 5px; /* Bordes redondeados estilo gamer */
                box-shadow: 2px 2px 2px #00ccff;
            }

            /* Estilos para el hover en el botón */
            button:hover {
                background-color:  #33ffff; /* Cambio de fondo al pasar el cursor */
                color: #000033;
            }
            /* Estilo para el label "Selecciona tu modo de pago" */
            label[for="pago"] {
                display: block;
                font-weight: bold;
                color: #078c8c; /* Color rojo estilo gamer */
                text-transform: uppercase; /* Texto en mayúsculas estilo gamer */
                text-shadow: 2px 2px 0 #00ccff ; /* Sombra estilo gamer */
                font-size: 18px;
                margin-top: 20px; /* Espacio superior estilo gamer */
            }
            select#pago {
                padding: 10px;
                border: 2px solid #00ccff; /* Borde rojo estilo gamer */
                background-color: #000; /* Fondo negro estilo gamer */
                color: #00ffff; /* Texto rojo estilo gamer */
                font-size: 16px;
                border-radius: 5px; /* Bordes redondeados estilo gamer */
                text-transform: uppercase; /* Texto en mayúsculas estilo gamer */
            }

            /* Estilo para las opciones dentro del select */
            select#pago option {
                background-color: #000; /* Fondo negro estilo gamer */
                color:  #00ffff; /* Texto rojo estilo gamer */
                font-size: 16px;
            }
            select#pago option:hover{
                background-color: #666666;
            }
            .payment-logo {
                width: 30px;
                margin-right: 10px;
            }
            /* Estilo para la ventana modal */
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
            }

            /* Estilo para el contenido de la ventana modal */
            .modal-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #333;
                color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                text-align: center;
            }

            /* Estilo para el botón de cerrar la ventana modal */
            .close {
                position: absolute;
                top: 0;
                right: 0;
                padding: 10px;
                cursor: pointer;
                color: #fff;
                font-size: 20px;
            }

            .close:hover {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <p>Compra Exitosa!!!</p>
            </div>
        </div>
        <div class="container">
            <h1>Información de Compra</h1>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
                <div class="form-group">
                    <label for="distrito">Distrito</label>
                    <input type="text" id="distrito" name="distrito" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="documento">N° de Documento</label>
                    <input type="text" id="documento" name="documento" required>
                </div>
            </form>

            <div class="order-summary">
                <h2>Tu Pedido</h2>
                <div class="form-group">
                    <label for="producto">Nombre del Producto</label>
                    <input type="text" id="producto" name="producto" value="Nombre del juego" disabled>
                </div>
                <div class="form-group">
                    <label for="subtotal">Subtotal</label>
                    <input type="text" id="subtotal" name="subtotal" value="S/170.10" disabled>
                </div>
                <div class="form-group">
                    <label for="envio">Envío</label>
                    <input type="text" id="envio" name="envio" value="Gratis" disabled>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" id="total" name="total" value="S/170.10" disabled>
                </div>
            </div>

            <div class="payment-options">
                <h2>Modo de Pago</h2>
                <label for="pago">Selecciona tu modo de pago:</label>
                <select id="pago" name="pago" required>
                    <option value="transferencia">Transferencia Bancaria</option>
                    <img class="payment-logo" src="img/Visa_Logo.png" alt="Logo Visa">
                    <option value="yape">Yape</option>
                    <img class="payment-logo" src="img/yape-logo-3E473EE7E5-seeklogo.com.png" alt="Logo Yape">Yape
                    <option value="plin">Plin</option>
                    <img class="payment-logo" src="img/plin-logo-0C4106153C-seeklogo.com.png" alt="Logo Plin">Plin
                </select>
            </div>
            <button onclick="realizarPedido()">Realizar Pedido</button>
        </div>
        <script>
            function realizarPedido() {
                // Simular una compra exitosa (puedes agregar lógica adicional aquí)

                // Mostrar la ventana emergente
                var modal = document.getElementById("modal");
                modal.style.display = "block";
            }

            function cerrarModal() {
                // Cerrar la ventana emergente
                var modal = document.getElementById("modal");
                modal.style.display = "none";

                // Redirigir a la página principal
                window.location.href = "INTERFAZ_2.php"; // Reemplaza "pagina_principal.html" con la URL de tu página principal
            }
        </script>

    </body>
</html>
