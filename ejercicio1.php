<?php
$productos = array(
    array("id" => 1, "nombre" => "Producto 1", "descripcion" => "Descripción del Producto 1", "precio" => 19.99),
    array("id" => 2, "nombre" => "Producto 2", "descripcion" => "Descripción del Producto 2", "precio" => 29.99),
    array("id" => 3, "nombre" => "Producto 3", "descripcion" => "Descripción del Producto 3", "precio" => 39.99),
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul id="lista-productos">
        <?php
        foreach ($productos as $producto) {
            echo "<li data-id='{$producto['id']}'>
                    <img src='imagenes/{$producto['id']}.jpg' alt='{$producto['nombre']}'>
                    <h2>{$producto['nombre']}</h2>
                    <p>{$producto['descripcion']}</p>
                    <p class='precio'>Precio: {$producto['precio']} USD</p>
                    <button onclick='agregarAlCarrito({$producto['id']})'>Agregar al Carrito</button>
                  </li>";
        }
        ?>
    </ul>
    <script src="script.js"></script>
</body>
</html>

<script>
function agregarAlCarrito(id) {
    // Aquí puedes implementar la lógica para agregar productos al carrito
    alert("Producto agregado al carrito. ID: " + id);
}
