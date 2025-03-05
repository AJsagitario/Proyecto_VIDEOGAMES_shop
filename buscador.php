<!DOCTYPE html>
<html>
    <head>
        <title>Buscador de Productos</title>
    </head>
    <body>
        <h1>Buscador de Productos</h1>

        <!-- Formulario de búsqueda -->
        <form id="search-form">
            <input type="text" id="search-input" placeholder="Escribe el producto que deseas">
            <button type="submit">Buscar</button>
        </form>

        <!-- Resultado de la búsqueda -->
        <div id="search-results">
            <!-- Aquí se mostrarán los resultados o "SIN RESULTADOS" -->
        </div>

        <script>
            document.getElementById("search-form").addEventListener("submit", function (event) {
                event.preventDefault();

                // Obtener el valor del campo de búsqueda
                var searchQuery = document.getElementById("search-input").value;

                // Realizar la lógica de búsqueda (aquí puedes implementar tu propia lógica)
                var resultado = buscarProducto(searchQuery);

                // Obtener el elemento donde se mostrarán los resultados
                var searchResults = document.getElementById("search-results");

                // Limpiar los resultados anteriores
                searchResults.innerHTML = "";

                if (resultado) {
                    // Mostrar el producto encontrado
                    var resultadoElement = document.createElement("p");
                    resultadoElement.textContent = "Producto encontrado: " + resultado;
                    searchResults.appendChild(resultadoElement);
                } else {
                    // Mostrar "SIN RESULTADOS" si no se encuentra el producto
                    var sinResultadosElement = document.createElement("p");
                    sinResultadosElement.textContent = "SIN RESULTADOS";
                    searchResults.appendChild(sinResultadosElement);
                }
            });

            // Función de búsqueda (aquí puedes implementar tu propia lógica)
            function buscarProducto(query) {
                // Aquí debes implementar la lógica de búsqueda. 
                // Por ejemplo, puedes comparar la query con una lista de productos.

                // Ejemplo simple:
                var productos = ["Producto1", "Producto2", "Producto3"];
                if (productos.includes(query)) {
                    return query;
                } else {
                    return null;
                }
            }
        </script>
    </body>
</html>

