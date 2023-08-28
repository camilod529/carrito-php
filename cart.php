<?php
class CarritoDeCompras
{
    private $productos = array();

    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    public function eliminarProducto($indice)
    {
        if (isset($this->productos[$indice])) {
            unset($this->productos[$indice]);
            $this->productos = array_values($this->productos); // Reindexar el array
        }
    }

    public function obtenerProductos()
    {
        return $this->productos;
    }
}

// Instancia del carrito de compras
$carrito = new CarritoDeCompras();

// Agregar productos al carrito
$producto1 = "Producto 1";
$producto2 = "Producto 2";
$carrito->agregarProducto($producto1);
$carrito->agregarProducto($producto2);

// Lista de productos en el carrito
$productosEnCarrito = $carrito->obtenerProductos();
print_r($productosEnCarrito);

// Eliminar un producto del carrito
$carrito->eliminarProducto(0);

// Lista actualizada de productos en el carrito
$productosEnCarrito = $carrito->obtenerProductos();
print_r($productosEnCarrito);