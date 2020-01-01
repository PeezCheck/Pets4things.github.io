<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$urunekle_adi = $_POST["addproductad"];
$urunekle_satadi = $_POST["addproductsatad"];
$uruneklefiyati = $_POST["addproductfiyat"];
$urunekle_resimurl = $_POST["addproductresimurl"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Urun (urun_ad, urun_saticiad, urun_fiyat,urun_resimurl)
VALUES ('$urunekle_adi', '$urunekle_satadi', '$uruneklefiyati','$urunekle_resimurl')";

if ($conn->query($sql) === TRUE) {
    echo "Ürün Başarıyla Eklenmiştir";
    echo ".$urunekle_resimurl.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:adminhomepage.php");
?> 
