<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <!-- Importacion de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CDN font awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="navbar navbar-dark bg-dark mb-4 px-4">
        <span class="navbar-brand">
            <i class="fa-solid fa-shop" style="color: #477eff;"></i>
            &nbsp; Ecommerce
        </span>
        <button class="btn btn-outline-primary">
            <span>Ir a carrito</span>
            <i class="fas fa-light fa-cart-shopping" style="color: #477eff;"></i>
        </button>
    </div>
    <?php
    echo "<h1>Carrito</h1>";
    ?>
</body>

</html>