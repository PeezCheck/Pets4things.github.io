<?php
$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";

$yoneticigiris_email = $_POST["adminloginemail"];
$yoneticigiris_sifre = $_POST["adminloginpw"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Yonetici where admin_eposta='$yoneticigiris_email' and admin_sifre='$yoneticigiris_sifre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Giriş Yapıldı";
} 
else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location:adminhomepage.php");
?>