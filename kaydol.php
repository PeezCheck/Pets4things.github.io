<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$kullanici_ad = $_POST["signupad"];
$kullanici_soyad = $_POST["signupsoyad"];
$kullanici_email = $_POST["signupemail"];
$kullanici_sifre = $_POST["signupsifre"];
$kullanici_tel = $_POST["signuptel"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Uye (uye_ad, uye_soyad, uye_eposta, uye_sifre, uye_tel)
VALUES ('$kullanici_ad', '$kullanici_soyad', '$kullanici_email', '$kullanici_sifre', '$kullanici_tel')";

if ($conn->query($sql) === TRUE) {
    echo "Kaydınız Başarıyla Oluşturulmuştur";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:mainpage1.html");
?> 
