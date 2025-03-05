<style>
    /* Estilo para el contenedor de los auriculares en la cabecera */
    .cabecera-Mandos {
        background-color: #000;
        text-align: center;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        color: #fff;
        transition: background-color 0.3s;
        border: 2px solid #66ffff;
    }

    .cabecera-Mandos:hover {
        background-color: #0093b7; /* Cambia el color de fondo en hover */
        border: 2px solid #000000;
    }
    .titulo-Mandos {
        font-family: "Inria Sans", sans-serif;
        font-weight: 500; /* 400 generalmente representa "regular" */
        font-size: 2em; /* Ajusta el tamaño de fuente según tus preferencias */
        color: #33ffff;
    }

    /* Estilo para los elementos de la lista de auriculares */
    .mandos-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #000;
    }
    .product-mandos {
        width: 42%; /* Ajusta el ancho para mostrar dos elementos por fila */
        margin: 10px 1%; /* Espacio entre elementos */
        padding: 10px;
        border: 2px solid #000;
        border-radius: 10px;
        text-align: center;
        transition: background-color 0.3s;
        border: 3px solid #009999;
        color: #fff;
    }

    .product-mandos:hover {
        background-color: #66ffff; /* Cambia el color de fondo en hover */
        color: #000000;
        transform: scale(1.1);
        border: 2px solid #000000;
        box-shadow: 0 0 10px #66ffff;
        cursor: pointer;
    }

    /* Estilo para los títulos de los auriculares */
    .product-mandos h2 {
        font-size: 1.5em;
        margin: 5px 0;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Estilo para los precios */
    .product-mandos p {
        font-weight: bold;
        font-size: 1.2rem;
        margin: 10px 0;
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
    <title>Mandos</title>
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
<div class="cabecera-Mandos">
    <h1 class="titulo-Mandos">MANDOS</h1>
</div>
<main>
    <section class="mandos-list">
        <article class="product-mandos">          
            <img src="img/MANDOS/MANDO ANIMATED PS4.png" alt=""/>
            <h2>Mando PS4</h2>
            <h2>GRAFFITI</h2>
            <p>Precio: S/129.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/2_COLORS_XBOX_ONE.png" alt=""/>
            <h2>Mando Xbox</h2>
            <h2>RED WHITE</h2>
            <p>Precio: S/141.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO DARK PS4.png" alt=""/>
            <h2>Mando PS4</h2>
            <h2>DARK STYLE</h2>
            <p>Precio: S/128.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO DEAD SKULL PS5.jpg" alt=""/>
            <h2>Mando PS5</h2>
            <h2>DEAD SKULL</h2>
            <p>Precio: S/148.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO GRAFFITI XBOX ONE.png" alt=""/>
            <h2>Mando Xbox</h2>
            <h2>GRAFFITI</h2>
            <p>Precio: S/150.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO GREENLIGHT PS4.png" alt=""/>
            <h2>Mando PS4</h2>
            <h2>GREEN GRAFFITI</h2>
            <p>Precio: S/129.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO JOKER XBOX ONE.png" alt=""/>
            <h2>Mando Xbox</h2>
            <h2>JOKER EDITION</h2>
            <p>Precio: S/119.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO_MARIO_PS5.png" alt=""/>
            <h2>Mando PS5</h2>
            <h2>SUPERMARIO EDITION</h2>
            <p>Precio: S/209.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO RED PS4.png" alt=""/>
            <h2>Mando PS4</h2>
            <h2>RED DARK</h2>
            <p>Precio: S/99.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO YELLOW PS4.png" alt=""/>
            <h2>Mando PS4</h2>
            <h2>YELLOW DARK</h2>
            <p>Precio: S/89.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO_DBZ_PS5.png" alt=""/>
            <h2>Mando PS5</h2>
            <h2>DBZ EDITION</h2>
            <p>Precio: S/109.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO_FORNIITE_PS5.png" alt=""/>
            <h2>Mando PS5</h2>
            <h2>FORNITE EDITION</h2>
            <p>Precio: S/219.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO_RM_PS5.png" alt=""/>
            <h2>Mando PS5</h2>
            <h2>REAL MADRID EDITION</h2>
            <p>Precio: S/219.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/MANDO_SKULL_LIGHT_XBOX_ONE.png" alt=""/>
            <h2>Mando XBOX</h2>
            <h2>SKULL LIGHT</h2>
            <p>Precio: S/210.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/PC MANDO 4.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>GREEN BLACK</h2>
            <p>Precio: S/79.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/PC_MANDO.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>DARK BLACK</h2>
            <p>Precio: S/89.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/PC_MANDO_2.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>ORANGE BLACK</h2>
            <p>Precio: S/109.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/PC_MANDO_3.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>LIGHT BLACK</h2>
            <p>Precio: S/119.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/PC_MANDO_5.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>SKY BLUE BLACK</h2>
            <p>Precio: S/99.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mandos">
            <img src="img/MANDOS/XBOX ONE DARK BLUE.png" alt=""/>
            <h2>Mando PC</h2>
            <h2>SKY BLUE DARK</h2>
            <p>Precio: S/109.00</p>
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

