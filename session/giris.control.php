<?php
@session_start();
if($_SESSION["GirisBasarili"] !=1) die("Yetkili Değilsiniz...")
?>
<a href="sorular.php">Geri Dön</a>
<a href="oturumu.kapat.php">Çıkış</a>
