<?php
session_start();
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
        <!-- Productos carrito -->
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">
                <div class="row isotope-grid">

                    <?php
                    require_once './models/Product.php';
                    require_once './models/Products.php';

                    $aux = new Products();
                    $aux->addProduct(new Product("Portatil Asus E1504fa-nj474", 2100000, "images/product-01.jpg", 10), 0);
                    $aux->addProduct(new Product("Monitor Samsung Ls22a33anhlxzl", 564000, "images/product-02.jpg", 20), 1);
                    $aux->addProduct(new Product("Mouse Logitech G3000S", 60000, "images/product-03.jpg", 2), 2);
                    $aux->addProduct(new Product("Apple iPhone 11 (64 GB)", 2300000, "images/product-04.jpg", 4), 3);
                    $aux->addProduct(new Product("Portatilaasd Asus E1504fa-nj474", 2100000, "images/product-01.jpg", 10), 4);
                    $aux->addProduct(new Product("Portatilaasd Asus E1504fa-nj474", 2100000, "images/product-01.jpg", 10), 5);
                    $aux->addProduct(new Product("Portatilaasd Asus E1504fa-nj474", 2100000, "images/product-01.jpg", 10), 6);
                    $aux->addProduct(new Product("Portatilaasd Asus E1504fa-nj474", 2100000, "images/product-01.jpg", 10), 7);
                    $productos = $aux->getProducts();
                    file_put_contents('cart.php', '<?php return ' . var_export($productos, true) . ';');
                    foreach ($productos as $valor) {
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="<?php echo "{$valor->getImg()}"; ?>" alt="IMG-PRODUCT">";
                                    <a href="#"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                        Ver
                                    </a>
                                </div>
                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                    

                                        <a href="proceso_actualizar_product-detail.php?param1=<?php echo $valor->getName(); ?>&param2=<?php echo $valor->getPrice(); ?>&param3=<?php echo $valor->getImg(); ?>"
                                            class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            <?php echo $valor->getName() ?>
                                        </a>

                                        <span class="stext-105 cl3">
                                            <?php echo $valor->getPrice() ?>
                                        </span>
                                    </div>
                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                                alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                src="images/icons/icon-heart-02.png" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>

    </header>
</body>

</html>
