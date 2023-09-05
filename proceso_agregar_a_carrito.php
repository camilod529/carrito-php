<?php
// Retrieve the data sent from the button
$nombre_prod = (string) $_POST['nombre_prod'];
$precio = (int)$_POST['precio'];
$cantidad = (int) $_POST['cantidad'];
$imagen = (string) $_POST['imagen'];

// Your PHP code here
// You can use $productId and $quantity in your code
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

            // Replace with the price of the product

// Prepare an SQL INSERT statement
$sql = "INSERT INTO productos_carro (`nombre_prod`, `precio`, `cantidad`, `imagen`) VALUES ('$nombre_prod', $precio, $cantidad, '$imagen')";
    if ($conn->query($sql) === TRUE) {
        echo "MySQL script executed successfully!";
    } else {
        echo "Error executing MySQL script: " . $conn->error;
    }

// Close the statement and database connection

$conn->close();
?>