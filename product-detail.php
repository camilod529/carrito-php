<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "carrito";

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection

// SQL query to retrieve data from the table
$sql = "SELECT * FROM producto_actual LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Access data from the row
    $nombre_prod = $row['nombre_prod'];
    $precio = $row['precio'];
	$texto = $row['texto'];
    $imagen = $row['imagen'];

    // Display or use the data as needed
   
} 

// Close the database connection
$conn->close();
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
    <header class="header-v4">
        <!-- Header desktop -->
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

                            <li class="active-menu">
                                <a href="product.php">Productos</a>
                            </li>

                            <li>
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

            <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
                Productos
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                <?php echo $nombre_prod; ?>
            </span>
        </div>
    </div>
    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php echo $imagen; ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="<?php echo $imagen; ?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">


                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <?php echo $nombre_prod; ?>
                        </h4>

                        <span class="mtext-106 cl2">
                            $<?php echo $precio; ?>
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            <?php echo $texto; ?>
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number"
                                            name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>


                                    <button id="addToCartButton"
                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Agregar al carrito
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
    document.getElementById("addToCartButton").addEventListener("click", function() {
        // Get the data attributes from the button
        var nombre_prod = "<?php echo $nombre_prod; ?>"; // Wrap in quotes
        var precio = "<?php echo $precio; ?>"; // Wrap in quotes
        var imagen = "<?php echo $imagen; ?>"; // Wrap in quotes
        var cantidad = 1;

        // Perform an AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "proceso_agregar_a_carrito.php", true);
        xhr.setRequestHeader("Content-Type",
            "application/x-www-form-urlencoded");

        // Define the data to send as parameters
        var data = "nombre_prod=" + nombre_prod + "&precio=" + precio + "&imagen=" + imagen + "&cantidad=" +
            cantidad;

        // Define a callback function to handle the response
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // The PHP script has executed, and you can process the response here
                var response = xhr.responseText;
                // You can choose to display a message or take other actions based on the response
                alert("Producto agregado al carrito");
            }
        };

        // Send the AJAX request with the data
        xhr.send(data);
    });
    </script>
        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
            <span class="stext-107 cl6 p-lr-25">
                SKU: E1504fa-nj474
            </span>

            <span class="stext-107 cl6 p-lr-25">
                Categorias: Tecnologia, Portatil
            </span>
        </div>
    </section>
</body>