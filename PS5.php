
<style>
    .cabecera-ps5 {
        background-image: url('img/PS5/WALLPAPER.png');
        background-size: cover;
        background-position: center;
        height: 300px;
        position: relative; /* Permite el posicionamiento relativo de los elementos contenidos */
    }

    .logo-ps5 {
        position: absolute;
        top: -115px; /* Ajusta la posición vertical del logo */
        left: 500px; /* Ajusta la posición horizontal del logo */
        z-index: 2; /* Coloca el logo por encima del fondo */
    }

    .titulo-ps5 {
        position: absolute;
        top: 20px; /* Ajusta la posición vertical del título */
        left: 450px; /* Ajusta la posición horizontal del título */
        font-size: 60px; /* Ajusta el tamaño de fuente del título */
        color:  #00ccff; /* Color del texto */
        z-index: 1; /* Coloca el título detrás del logo */
        text-align: center;
        text-shadow: 10px 8px 5px #666666;
    }
    /* Estilos para los juegos PS5 */
    main {
        background-color: #000;
        color: #fff;
        font-family: 'Arial', sans-serif;
        padding: 20px;
    }

    .PS5-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .game-ps5 {
        background-color: #111; /* Fondo oscuro */
        border: 1px solid #33ffff;
        border-radius: 15px;
        margin: 10px;
        padding: 20px;
        width: calc(20% - 20px);
        text-align: center;
        transition: background-color 0.5s; /* Agrega una transición suave al cambio de color de fondo */
    }

    .game-ps5:hover {
        background-color: #666666; /* Fondo gris en el hover */
    }

    .game-ps5 img {
        max-width: 100px;
        height: auto;
    }

    .game-ps5 h2 {
        font-size: 24px; /* Tamaño de fuente más grande */
        margin: 10px 0;
        font-family: 'Papyrus', fantasy; /* Estilo de fuente más "gaming" */
        color: #00cccc;
    }

    .game-ps5 p {
        font-size: 16px; /* Tamaño de fuente más grande */
        font-weight: bold; /* Texto en negritas */
        color: #33ffff; /* Color de texto verde para dar un aspecto "gaming" */
        font-family: 'Helvetica', sans-serif;
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
    <title>PS5 Games</title>
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
<div class="cabecera-ps5">
    <img src="img/PS5/LOGO.png" alt="Logo PS5" class="logo-ps5">
    <h1 class="titulo-ps5">PS5</h1>
</div>

<main>
    <section class="PS5-list">
        <article class="game-ps5">          
            <img src="img/PS5/GAME1-PS5.png" alt=""/>
            <h2>GOD OF WAR</h2>
            <p>Precio: S/279.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME2-PS5.png" alt=""/>
            <h2>BATTLEFIELD 2042</h2>
            <p>Precio: S/269.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME3-PS5.png" alt=""/>
            <h2>PARK BEYOND</h2>
            <p>Precio: S/188.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME4-PS5.png" alt=""/>
            <h2>ASSASSINS CREED</h2>
            <h2>MIRAGE</h2>
            <p>Precio: S/248.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME5-PS5.png" alt=""/>
            <h2>DESTRUCTION ALLSTARS</h2>
            <p>Precio: S/229.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME6-PS5.png" alt=""/>
            <h2>FIFA 23</h2>
            <p>Precio: S/249.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME7-PS5.png" alt=""/>
            <h2>HOGWARTS</h2>
            <p>Precio: S/239.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME8-PS5.png" alt=""/>
            <h2>GTA V</h2>
            <p>Precio: S/149.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME9-PS5.png" alt=""/>
            <h2>ATLAS FALLEN</h2>
            <p>Precio: S/250.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps5">
            <img src="img/PS5/GAME10-PS5.png" alt=""/>
            <h2>DEAD SPACE</h2>
            <p>Precio: S/209.00</p>
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



