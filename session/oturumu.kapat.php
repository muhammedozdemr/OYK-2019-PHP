<?php
@session_start();//session komutunu başlatma
//@session_destroy();//çıkış yapma komutu
$_SESSION["GirisBasarili"]=0; die("Yetkili Değilsiniz...<a href='index.php'>Giriş Yap</a>")//çıkış yapmamızı sağlıyor.

 ?>
Oturumunuz Sona erdi...<br>
<a href="index.php">Tekrar Giriş yapmak için tıklayınız.</a>
