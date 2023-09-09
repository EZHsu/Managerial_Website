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
$acc = "";
$end = "";
if (isset($_POST['name'])) { 
    $key = $_POST['name'];
}
if (isset($_POST['acc'])) { 
    $acc = $_POST['acc'];
}

if(isset($_POST['end'])){
    $end = $_POST['end'];
}


$sql = "UPDATE report SET report_end = 1 WHERE report_id = '$key'";
$sql2 = "UPDATE authority SET report_count = report_count + 1 WHERE account = '$acc'";



if($end == "0"){
    if ($conn->query($sql) === TRUE) {
        echo "Reported\n";
    }

    if ($conn->query($sql2) === TRUE) {
        echo "Updating Report Count\n";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}

else{
    echo "Already Closed\n";
}


$sql = "SELECT account FROM authority WHERE report_count >= 3 && account = $acc";
$result = mysqli_query($conn, $sql);
if(isset($result)){
    while($row=mysqli_fetch_assoc($result)){
        if($row['account'] != NULL){
            echo "".$row['account']." has exceed the limit of reports.\n";
            $conn->close();
            exit();
            }
        }
    }
$conn->close();
?>