<?php

$host = "localhost";  // Your MySQL server hostname (usually "localhost" for XAMPP)
$username = "root";   // Your MySQL username (default for XAMPP is "root")
$password = "";       // Your MySQL password (default for XAMPP is empty)
$database = "carrito"; // Replace with your actual database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importacion de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CDN font awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <!-- Header -->
    <header class="header-v4">
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="index.php">Inicio</a>
                            </li>

                            <li>
                                <a href="product.php">Productos</a>
                            </li>

                            <li class="active-menu">
                                <a href="shoping-cart.php">Carrito de Compra</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="1">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Inicio
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Carrito de compra
            </span>
        </div>
    </div>

    <!-- Shoping Cart -->

    <?php
	require_once './models/Product.php';
	$productos = include('./cart.php');

	?>

    <form class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Producto</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Precio</th>
                                    <th class="column-4">Cantidad</th>
                                    <th class="column-5">Total</th>
                                </tr>
                                <?php
// Your database connection code here (establish a connection to MySQL)

// Sample query to retrieve items from the database
$query = "SELECT nombre_prod, precio, cantidad, imagen FROM productos_carro";
$result = mysqli_query($conn, $query);

// Check if there are items in the result set
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre_prod = $row["nombre_prod"];
        $precio = $row["precio"];
        $cantidad = $row["cantidad"];
        $imagen = $row["imagen"];
        
        // Generate HTML for each item
		echo '<tr class="table_row">';
		echo '    <td class="column-1">';
		echo '        <div class="how-itemcart1">';
		echo '            <img src="' . $imagen .'" alt="IMG">';
		echo '    </td>';
		echo '        </div>';
		
		echo '    <td class="column-2">' . $nombre_prod .'</td>';
		echo '    <td class="column-3">$ ' . $precio .'</td>';
		echo '    <td class="column-4">';
		echo '        <div class="wrap-num-product flex-w m-l-auto m-r-0">';
		echo '            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">';
		echo '                <i class="fs-16 zmdi zmdi-minus"></i>';
		echo '            </div>';
		echo '';
		echo '            <input class="mtext-104 cl3 txt-center num-product" type="number"';
		echo '                name="num-product1" value="' . $cantidad .'">';
		echo '';
		echo '            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">';
		echo '                <i class="fs-16 zmdi zmdi-plus"></i>';
		echo '            </div>';
		echo '        </div>';
		echo '    </td>';
		echo '    <td class="column-5">$ ' . $precio .'</td>';
		echo '</tr>';
        
    }
} else {
    echo "No items in the shopping cart.";
}
$query = "SELECT precio FROM productos_carro";
$result = mysqli_query($conn, $query);

// Initialize the total price variable
$totalPrice = 0;

// Check if there are items in the result set
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the price of each item to the total
        $totalPrice += $row["precio"];
    }}

    // Close the database connection
    mysqli_close($conn);
// Close the database connection

?>




                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Total Carrito
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>

                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    $<?php echo $totalPrice; ?>
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2">
                                    Envio:
                                </span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    Envio gratis a toda colombia.
                                </p>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    $<?php echo $totalPrice; ?>
                                </span>
                            </div>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proceder al pago
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>