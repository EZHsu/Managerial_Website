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

$key = "";
$end = "";
if (isset($_POST['name'])) { 
    $key = $_POST['name'];
}

if(isset($_POST['end'])){
    $end = $_POST['end'];
}



$sql = "UPDATE report SET report_end = 2 WHERE report_id = '$key'";


if($end == 0){
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "Report Denied";
}

else{
    echo "Already Closed\n";
}

$conn->close();
?>
