<style>
    .cabecera-ps4 {
        background-image: url('img/PS5/WALLPAPER.png');
        background-size: cover;
        background-position: center;
        height: 300px;
        position: relative; /* Permite el posicionamiento relativo de los elementos contenidos */
    }

    .logo-ps4 {
        position: absolute;
        top: -115px; /* Ajusta la posición vertical del logo */
        left: 750px; /* Ajusta la posición horizontal del logo */
        z-index: 2; /* Coloca el logo por encima del fondo */
    }

    .titulo-ps4 {
        position: absolute;
        top: 20px; /* Ajusta la posición vertical del título */
        left: 450px; /* Ajusta la posición horizontal del título */
        font-size: 60px; /* Ajusta el tamaño de fuente del título */
        color: #00ccff; /* Color del texto */
        z-index: 1; /* Coloca el título detrás del logo */
        text-align: center;
        text-shadow: 10px 8px 5px #666666;
    }
    /* Estilos para los juegos PS4 */
    main {
        background-color: #000;
        color: #fff;
        font-family: 'Arial', sans-serif;
        padding: 20px;
    }

    .PS4-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .game-ps4 {
        background-color: #111; /* Fondo oscuro */
        border: 1px solid #33ffff;
        border-radius: 15px;
        margin: 10px;
        padding: 20px;
        width: calc(20% - 20px);
        text-align: center;
        transition: background-color 0.5s; /* Agrega una transición suave al cambio de color de fondo */
    }

    .game-ps4:hover {
        background-color: #666666; /* Fondo gris en el hover */
    }

    .game-ps4 img {
        max-width: 100px;
        height: auto;
    }

    .game-ps4 h2 {
        font-size: 24px; /* Tamaño de fuente más grande */
        margin: 10px 0;
        font-family: 'Papyrus', fantasy; /* Estilo de fuente más "gaming" */
        color: #00cccc;
    }

    .game-ps4 p {
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
    <title>PS4 GAMES</title>
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
<div class="cabecera-ps4">
    <img src="img/PS4/LOGO-PS4.png" alt="Logo PS4" class="logo-ps4">
    <h1 class="titulo-ps4">PS4</h1>
</div>

<main>
    <section class="PS4-list">
        <article class="game-ps4">          
            <img src="img/PS4/PS4-GAME1.png" alt=""/>
            <h2>DAYMARE</h2>
            <p>Precio: S/209.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME2.png" alt=""/>
            <h2>COD GHOSTS</h2>
            <p>Precio: S/169.90</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME3.png" alt=""/>
            <h2>COD WWII</h2>
            <p>PRO EDITION</p>
            <p>Precio: S/288.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME4.png" alt=""/>
            <h2>TEKKEN 7</h2>
            <p>Precio: S/148.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME5.png" alt=""/>
            <h2>WWE 2K20</h2>
            <p>Precio: S/229.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME6.png" alt=""/>
            <h2>WWE 2K19</h2>
            <p>Precio: S/209.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME7.png" alt=""/>
            <h2>SHADOW OF MORDOR</h2>
            <p>Precio: S/219.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME8.png" alt=""/>
            <h2>COD BLACKOPS II</h2>
            <p>Precio: S/189.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME9.png" alt=""/>
            <h2>FORNITE</h2>
            <p>Precio: S/150.00</p>
            <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
        </article>
        <article class="game-ps4">
            <img src="img/PS4/PS4-GAME10.png" alt=""/>
            <h2>SPIDERMAN</h2>
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

