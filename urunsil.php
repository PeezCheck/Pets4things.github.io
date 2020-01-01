<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$urunsil_id = $_POST["deleteproductid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM Urun WHERE urun_id='$urunsil_id'";

if ($conn->query($sql) === TRUE) {
    echo "Ürün Başarıyla Silindi";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>