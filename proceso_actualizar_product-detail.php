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

echo "Connected successfully";
// Check if the required parameters are set in the URL
if (isset($_GET['param1']) && isset($_GET['param2'])) {
    $param1 = $_GET['param1'];
    $param2 = $_GET['param2'];
    $param3 = $_GET['param3'];
    $param4 = $_GET['param4'];

    // Perform any necessary validation and sanitation of input data here

    // Connect to your MySQL database (as shown in previous responses)

    // Execute your MySQL script based on the data
    $sql = "DELETE FROM producto_actual";
    if ($conn->query($sql) === TRUE) {
        echo "All rows deleted successfully.";
    } else {
        echo "Error deleting rows: " . $conn->error;
    }
    $sql = "INSERT INTO producto_actual (nombre_prod, precio, texto,imagen) VALUES ('$param1', '$param2','$param4','$param3')";
    if ($conn->query($sql) === TRUE) {
        echo "MySQL script executed successfully!";
    } else {
        echo "Error executing MySQL script: " . $conn->error;
    }
    
    // Close the database connection (as shown in previous responses)
} else {
    echo "Missing required parameters.";
}
$conn->close();
header("Location: product-detail.php");
exit();
?>
