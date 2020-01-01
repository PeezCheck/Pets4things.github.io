<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$adresekle_adi = $_POST["adresad"];
$adresekle_soyadi = $_POST["adressoyad"];
$adresekle_email = $_POST["adresemail"];
$adresekle_telefon = $_POST["adrestelefon"];
$adresekle_il = $_POST["adresil"];
$adresekle_ilce = $_POST["adresilce"];
$adresekle_tamadres = $_POST["tamadres"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Adres (adres_il, adres_ilçe, adres_ad,uye_id)
VALUES ('$adresekle_il', '$adresekle_ilce', '$adresekle_tamadres',)";

if ($conn->query($sql) === TRUE) {
    echo "Adres Eklendi";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
