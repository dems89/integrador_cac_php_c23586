document.addEventListener("DOMContentLoaded", () => {
  // Capturamos el input de búsqueda y la tabla 1
  const searchInput = document.getElementById("searchInput");
  const table1 = document.getElementById("table1");
  const rows1 = table1.getElementsByTagName("tr");

  // Intentamos capturar la tabla 2
  const table2 = document.getElementById("table2");
  const rows2 = table2 ? table2.getElementsByTagName("tr") : null;

  searchInput.addEventListener("input", function () {
    const searchTerm = this.value.toLowerCase();

    // Función para filtrar una tabla
    function filterTable(rows) {
      // Verificamos si rows no es null
      if (rows) {
        // Recorremos todas las filas de la tabla
        for (let i = 1; i < rows.length; i++) {
          const cells = rows[i].getElementsByClassName("search");
          let found = false;

          // Verificamos cada celda con la clase 'search' en esa fila
          for (let j = 0; j < cells.length; j++) {
            const cellContent = cells[j].textContent.toLowerCase();

            // Si la celda contiene el término de búsqueda, la mostramos, si no, la ocultamos
            if (cellContent.includes(searchTerm)) {
              found = true;
              break;
            }
          }

          // Mostramos u ocultamos la fila según si se encontró alguna coincidencia
          if (found) {
            rows[i].style.display = "";
          } else {
            rows[i].style.display = "none";
          }
        }
      }
    }

    // Aplicamos la función de filtrado solo si la tabla 2 existe
    filterTable(rows1);
    filterTable(rows2);
  });
});
