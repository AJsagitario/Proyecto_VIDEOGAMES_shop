<html>
    <head>
        <title>Preguntas Frecuentes</title>
        <link href="css/Preg Frec.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="preg-frec">
            <div class="preguntas">
                <div class="question">¿Tienen tienda física?</div>
                <div class="answer">Si, contamos con una tienda física en: Calle dignidad Mz BBB-5 Lot 22, Los Olivos.</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Los productos cuentan con garantía?</div>
                <div class="answer">Absolutamente si, todos nuestros productos son originales, nuevos, sellados y cuentan con total garantía..</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Qué cubre la garantía y por cuanto tiempo?</div>
                <div class="answer">La garantía solo cubre fallas de fábrica y el tiempo depende del producto que hayas adquirido, los juegos tienen garantía por siete (7) días, los accesorios por tres (3) meses y las consolas por un (1) año..</div>
            </div>
            <div class="preguntas">
                <div class="question">¿El envío tiene costo adicional?</div>
                <div class="answer">Si, los precios de los productos no incluyen el costo de envío, los envíos en Lima tienen un costo de 10 soles previo deposito y 15 soles el servicio contra entrega.</div>
            </div>
            <div class="preguntas">
                <div class="question">¿El costo de envío es por producto o por el pedido completo?</div>
                <div class="answer">El costo de envío es por el pedido completo.</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Entregan boleta de compra?</div>
                <div class="answer">Si, todos los pedidos los entregamos con boleta.</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Puedo pagar con moneda extranjera?</div>
                <div class="answer">No, solo aceptamos pagos con moneda nacional (Nuevo Sol).</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Cuánto tiempo demoran los envíos en llegar?</div>
                <div class="answer">Los envíos en Lima llegan en 24 horas hábiles una vez despachado en la agencia o luego de coordinar en caso de ser contra entrega.</div>
            </div>
            <div class="preguntas">
                <div class="question">¿Hasta que hora puedo realizar el pago para que mi pedido sea enviado el mismo día?</div>
                <div class="answer">Los pagos hechos hasta las 4 pm serán tomados en cuenta para el envío el mismo día, en caso de pagar tu pedido luego de esta hora, quedará pendiente de despacho para el día siguiente.</div>
            </div>
        </div>
        <script>/* para manejar los efectos click en las preguntas */
            document.addEventListener('DOMContentLoaded', function () {
                const preguntas = document.querySelectorAll('.preguntas');

                preguntas.forEach((pregunta) => {
                    pregunta.addEventListener('click', () => {
                        pregunta.classList.toggle('clicked');
                    });
                });
            });
        </script>
    </body>
</html>

