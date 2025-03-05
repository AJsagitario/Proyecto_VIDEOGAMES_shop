
<style>
    /* Estilo para la cabecera */
    .cabecera-preVenta {
        background-color: #3498db; /* Color celeste */
        color: #000; /* Color negro */
        text-align: center;
        padding: 20px;
        margin-bottom: 20px;
    }
    .cabecera-preVenta {
        background-color: #0093b7; /* Cambia el color de fondo en hover */
        border: 2px solid #000000;
    }
    /* Estilo para el título de la cabecera */
    .titulo-preVenta- {
        font-size: 36px;
        margin: 0;
    }

    /* Estilo para los artículos de liquidación */
    .product-preVenta {
        background-color: #3498db; /* Color celeste */
        color: #000; /* Color negro */
        border: 1px solid #000; /* Borde negro */
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Efecto hover para los artículos de liquidación */
    .product-preVenta:hover {
        background-color: #000; /* Cambia a color negro en hover */
        color: #3498db; /* Cambia a color celeste en hover */
    }

    /* Estilo para las imágenes de los productos */
    .product-preVenta img {
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
    .preVenta-list {
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
    <title>Pre Venta</title>
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
<div class="cabecera-preVenta">

    <h1 class="titulo-preVenta">PRE VENTA</h1>
</div>
<main>
    <section class="preVenta-list">
        <article class="product-preVenta">          
            <img src="img/PRE VENTA/CRASH RUMBLE.png" alt=""/>
            <h2>CRASH RUMBLE</h2>
            <h2>XBOX ONE</h2>
            <div class="circ-desc">-40%</div>
            <span class="precio-orig">S/164.00</span>
            <span class="desc-precio">S/98.40</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-preVenta">
            <img src="img/PRE VENTA/CRASH TEAM RUMBLE.png" alt=""/>
            <h2>CRASH RUMBLE</h2>
            <h2>PS5</h2>
            <span class="precio">S/244.00</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-preVenta">
            <img src="img/PRE VENTA/FINAL FANTASY VII REMAKE.png" alt=""/>
            <h2>FINAL FANTASY VII</h2>
            <h2>REMAKE</h2>
            <h2>PS5</h2>
            <div class="circ-desc">-55%</div>
            <span class="precio-orig">S/194.00</span>
            <span class="desc-precio">S/87.30</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-preVenta">
            <img src="img/PRE VENTA/RESIDENT EVIL 4 REMAKE.png" alt=""/>
            <h2>RESIDENT EVIL 4</h2>
            <h2>REMAKE</h2>
            <h2>PS5</h2>
            <span class="precio">S/267.00</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-preVenta">
            <img src="img/PRE VENTA/STREET FIGHTER .jpg" alt=""/>
            <h2>STREET FIGHTER 6</h2>
            <h2>PS5</h2>
            <div class="circ-desc">-25%</div>
            <span class="precio-orig">S/99.00</span>
            <span class="desc-precio">S/74.25</span>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-preVenta">
            <img src="img/PRE VENTA/STREET FIGHTER 6.png" alt=""/>
            <h2>STREET FIGHTER 6</h2>
            <h2>XBOX SERIES X</h2>
            <span class="precio">S/196.00</span>
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


