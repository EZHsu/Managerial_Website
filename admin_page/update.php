<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$key = 0;
if (isset($_POST['name'])) { 
    $key = $_POST['name'];
}

$sql = "UPDATE customer_service SET service_end= 1 WHERE service_id = '$key'";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$message = "Customer Service Record Updated";
echo $message;

$conn->close();
?>