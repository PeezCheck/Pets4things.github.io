<?php
session_start();
?>
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
    
    while($row = $result->fetch_assoc()) {
        $_SESSION["uye_ad"]=$row["admin_ad"];
        $_SESSION["uye_soyad"]=$row["admin_soyad"];
        $_SESSION["logged"]="true";
    }
}
else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location:adminhomepage.php");
?>