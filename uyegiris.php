<?php
$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$kullanicigiris_email = $_POST["userloginemail"];
$kullanicigiris_sifre = $_POST["userloginpw"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Uye where uye_eposta='$kullanicigiris_email' and uye_sifre='$kullanicigiris_sifre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Giriş Yapıldı";
} 
else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location:mainpage1.html");
?>