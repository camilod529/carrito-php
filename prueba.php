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

// Perform database operations here

// Close the connection when you're done

$sql = "SELECT * FROM producto_actual";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Access the data from the row
    $column1Value = $row['nombre_prod']; // Replace 'column1' with the actual column name
    $column2Value = $row['precio']; // Replace 'column2' with the actual column name
    $column3Value = $row['texto']; // Replace 'column1' with the actual column name
    $column4Value = $row['imagen']; // Replace 'column2' with the actual column name

    // Do something with the data
    echo "Value of column 1: " . $column1Value . "<br>";
    echo "Value of column 2: " . $column2Value . "<br>";
} else {
    echo "No data found or multiple rows found.";
}
$sql = "DELETE FROM producto_actual"; // Replace 'your_table_name' with the name of your table
$result = $conn->query($sql);

if ($result) {
    echo "All rows deleted successfully!";
} else {
    echo "Error deleting rows: " . $conn->error;
}
// Close the database connection when you're done
$conn->close();

?>