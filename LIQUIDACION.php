
<style>
    /* Estilo para la cabecera */
    .cabecera-liquidacion {
        background-color: #3498db; /* Color celeste */
        color: #000; /* Color negro */
        text-align: center;
        padding: 20px;
        margin-bottom: 20px;
    }
    .cabecera-liquidacion{
        background-color: #0093b7; /* Cambia el color de fondo en hover */
        border: 2px solid #000000;
    }
    /* Estilo para el título de la cabecera */
    .titulo-liquidacion {
        font-size: 36px;
        margin: 0;
    }

    /* Estilo para los artículos de liquidación */
    .product-liquidacion {
        background-color: #3498db; /* Color celeste */
        color: #000; /* Color negro */
        border: 1px solid #000; /* Borde negro */
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Efecto hover para los artículos de liquidación */
    .product-liquidacion:hover {
        background-color: #000; /* Cambia a color negro en hover */
        color: #3498db; /* Cambia a color celeste en hover */
    }

    /* Estilo para las imágenes de los productos */
    .product-liquidacion img {
        max-width: 100%;
    }

    /* Estilo para los precios originales y descuentos */
    .precio-orig {
        text-decoration: line-through; /* Tachado para el precio original */
    }

    .desc-precio {
        font-weight: bold;
    }
    /* Organiza los elementos en dos filas */
    .liquidacion-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    /* Estilo para la descripción del descuento (.circ-desc) */
    .circ-desc {
        background-color: #99ffff; /* Color celeste */
        color: #000099; /* Color blanco */
        border-radius: 50%; /* Forma circular */
        padding: 5px 10px; /* Ajusta el espaciado interno */
        font-weight: bold;
        display: inline-block; /* Hace que el elemento se comporte como un bloque en línea */
        margin: 5px; /* Espaciado entre elementos */
        text-align: center;
    }
    /* Estilo general del carrito de compras */
    #carrito-count {
        display: inline-block;
        background-color:  #00ffff;
        color: #000033;
        padding: 5px 10px;
        border-radius: 50%;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #carrito-count:hover {
        background-color: #000033;
        color: #00ffff;
        box-shadow: 2px 2px 2px #00ffff;

    }

    #carrito {
        display: none; /* El carrito estará oculto inicialmente */
        background-color: #33ffff;
        border: 2px solid #000033;
        border-radius: 5px;
        padding: 10px;
        position: absolute;
        top: 40px;
        right: 10px;
        z-index: 1;
    }

    #carrito button {
        background-color: #00cccc;
        color:  #000033;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #carrito button:hover {
        background-color: #000033;
        color: #33ffff;
    }

    #total {
        font-weight: bold;
        color: #009999;
    }

    /* Estilo para los botones "Ver Carrito" y "Realizar Compra" */
    button {
        background-color: #00ffff;
        color:  #000033;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #00cccc;
    }
</style>
<head>
    <title>Liquidación</title>
</head>
<!-- Carrito de compras -->
<h2><span id="carrito-count"><i class="fas fa-shopping-cart"></i> 0</span></h2>
<div id="carrito" class="carrito-list">
    <!-- El carrito estará oculto inicialmente -->
    <div id="carrito-items">
        <!-- Aquí se mostrarán los juegos en el carrito -->
    </div>
    <button onclick="ocultarCarrito()">Cerrar Carrito</button>
</div>
<p>Total: S/<span id="total">0.00</span></p>
<button onclick="mostrarCarrito()">Ver Carrito</button>
<button onclick="realizarCompra()">Realizar Compra</button>
<div class="cabecera-liquidacion">

    <h1 class="titulo-liquidacion">LIQUIDACIÓN</h1>
</div>
<main>
    <section class="liquidacion-list">
        <article class="product-liquidacion">          
            <img src="img/LIQUIDACIÓN/BATTLEFIELD 4.jpg" alt=""/>
            <h2>BATTLEFIELD 4</h2>
            <h2>XBOX ONE</h2>
            <div class="circ-desc">-40%</div>
            <span class="precio-orig">S/164.00</span>
            <span class="desc-precio">S/98.40</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/BATTLEFIELD V.png" alt=""/>
            <h2>BATTLEFIELD V</h2>
            <h2>PS5</h2>
            <div class="circ-desc">-35%</div>
            <span class="precio-orig">S/184.00</span>
            <span class="desc-precio">S/119.60</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/FIFA20.png" alt=""/>
            <h2>FIFA 20</h2>
            <h2>PS4</h2>
            <div class="circ-desc">-55%</div>
            <span class="precio-orig">S/194.00</span>
            <span class="desc-precio">S/87.30</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/LOS SIMPS 4.png" alt=""/>
            <h2>LOS SIMPS 4</h2>
            <h2>PS5</h2>
            <div class="circ-desc">-60%</div>
            <span class="precio-orig">S/199.00</span>
            <span class="desc-precio">S/79.60</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/PvsZ GARDEN WARFARE .png" alt=""/>
            <h2>PvsZ Garden Warfare</h2>
            <h2>XBOX ONE</h2>
            <div class="circ-desc">-25%</div>
            <span class="precio-orig">S/99.00</span>
            <span class="desc-precio">S/74.25</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/PvsZ GARDEN WARFARE 2.png" alt=""/>
            <h2>PvsZ Garden Warfare 2</h2>
            <h2>PS5</h2>
            <div class="circ-desc">-25%</div>
            <span class="precio-orig">S/99.00</span>
            <span class="desc-precio">S/119.40</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/WWE 2K15.png" alt=""/>
            <h2>WWE 2K15</h2>
            <h2>PS4</h2>
            <div class="circ-desc">-45%</div>
            <span class="precio-orig">S/99.00</span>
            <span class="desc-precio">S/54.45</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/WWE 2K16.png" alt=""/>
            <h2>WWE 2K16</h2>
            <h2>XBOX ONE</h2>
            <div class="circ-desc">-35%</div>
            <span class="precio-orig">S/89.00</span>
            <span class="desc-precio">S/57.85</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/WWE 2K17.png" alt=""/>
            <h2>WWE 2K17</h2>
            <h2>XBOX ONE</h2>
            <div class="circ-desc">-40%</div>
            <span class="precio-orig">S/89.00</span>
            <span class="desc-precio">S/53.40</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-liquidacion">
            <img src="img/LIQUIDACIÓN/eFootball-PES2020.png" alt=""/>
            <h2>PES 2020r</h2>
            <h2>PS4</h2>
            <div class="circ-desc">-50%</div>
            <span class="precio-orig">S/95.00</span>
            <span class="desc-precio">S/47.50</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <script>
            let carrito = [];
            let total = 0;
            function agregarAlCarrito(button) {
                const product = button.parentNode;
                const title = product.querySelector('h2').textContent;
                let originalPrice;
                let discountedPrice;

                if (product.querySelector('.precio-orig')) {
                    originalPrice = product.querySelector('.precio-orig').textContent;
                    discountedPrice = product.querySelector('.desc-precio').textContent;
                } else {
                    originalPrice = product.querySelector('p').textContent;
                    discountedPrice = originalPrice;
                }

                carrito.push({title, originalPrice, discountedPrice});
                total += parseFloat(discountedPrice.replace('S/', '').replace(',', ''));

                actualizarCarrito();
            }

            function actualizarCarrito() {
                const carritoCount = document.getElementById('carrito-count');
                carritoCount.innerHTML = `<i class="fas fa-shopping-cart"></i> ${carrito.length}`;
            }

            function mostrarCarrito() {
                const carritoDiv = document.getElementById('carrito');
                const carritoItems = document.getElementById('carrito-items');
                carritoItems.innerHTML = '';

                carrito.forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.textContent = `${item.title} - ${item.discountedPrice}`;
                    carritoItems.appendChild(itemDiv);
                });

                carritoDiv.style.display = 'block';
            }

            function ocultarCarrito() {
                const carritoDiv = document.getElementById('carrito');
                carritoDiv.style.display = 'none';
            }

            function realizarCompra() {
                // Redirige al cliente a una página para ingresar sus datos de compra.
                window.location.href = 'Datos_Compra.php';
            }
        </script>
    </section>
</main>

