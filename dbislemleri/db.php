<?php
$servername = "localhost";
$username   = "KullanıcıAdı";
$password   = "Parolanız";
$dbname     = "Veritabanı Adı";

// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";


?>
