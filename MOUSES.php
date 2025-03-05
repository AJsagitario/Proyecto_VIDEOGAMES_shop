
<style>
    /* Estilo para el contenedor de los auriculares en la cabecera */
    .cabecera-mouses {
        background-color: #000;
        text-align: center;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        color: #0093b7;
        transition: background-color 0.3s;
        border: 2px solid #66ffff;
    }

    .cabecera-mouses:hover {
        background-color: #0093b7; /* Cambia el color de fondo en hover */
        border: 2px solid #000000;
    }
    .titulo-mouses{
        font-family: "Inria Sans", sans-serif;
        font-weight: 500; /* 400 generalmente representa "regular" */
        font-size: 2em; /* Ajusta el tamaño de fuente según tus preferencias */
        color: #33ffff;
    }

    /* Estilo para los elementos de la lista de auriculares */
    .mouses-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #000;
    }
    .product-mouses {
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

    .product-mouses:hover {
        background-color: #66ffff; /* Cambia el color de fondo en hover */
        color: #000000;
        transform: scale(1.1);
        border: 2px solid #000000;
        box-shadow: 0 0 10px #66ffff;
        cursor: pointer;
    }

    /* Estilo para los títulos de los auriculares */
    .product-mouses h2 {
        font-size: 1.5em;
        margin: 5px 0;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Estilo para los precios */
    .product-mouses p {
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
    <title>Mouses</title>
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
<div class="cabecera-mouses">

    <h1 class="titulo-mouses">MOUSES</h1>
</div>
<main>
    <section class="mouses-list">
        <article class="product-mouses">          
            <img src="img/MOUSES/mouse1.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>INALÁMBRICO LED</h2>
            <p>Precio: S/119.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse2.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>RED PANTER</h2>
            <p>Precio: S/101.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse3.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>PURPLE PANTER</h2>
            <p>Precio: S/178.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse4.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>RED RX</h2>
            <p>Precio: S/68.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse5.png" alt=""/>
            <h2>Mouse Gamer + Teclado Gamer</h2>
            <h2>EDITION LIMITED</h2>
            <p>Precio: S/150.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse6.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>PREMIUN RED</h2>
            <p>Precio: S/89.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse7.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>SKYWHITE EDITION</h2>
            <p>Precio: S/119.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse8.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>EXTREME EDITION</h2>
            <p>Precio: S/79.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse9.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>PINK EDITION</h2>
            <p>Precio: S/79.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse10.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>DARK PURPLE</h2>
            <p>Precio: S/69.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse11.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>BLACK PURPLE</h2>
            <p>Precio: S/89.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="product-mouses">
            <img src="img/MOUSES/mouse12.png" alt=""/>
            <h2>Mouse Gamer</h2>
            <h2>LIGHT PURPLE</h2>
            <p>Precio: S/149.00</p>
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
