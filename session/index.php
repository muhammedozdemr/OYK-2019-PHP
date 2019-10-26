<?php
@session_start();//session komutunu başlatma
 ?>

<h1>Eğitmenler Girişi</h1>
<form class="" action="" method="post">
Kullanıcı Adınız: <input type="text" name="user" value=""><br><br>
Parolanız: <input type="password" name="password" value=""><br><br>
<button type="submit" name="giris" >Giriş</button>
</form>
<?php
if(isset($_POST["user"])){
if($_POST["user"]=="kullaniciadi" and $_POST["password"]=="parola"){
  $_SESSION["GirisBasarili"]=1;
  echo "<a href=sorular.php>Sorular</a>";
}
else{
  echo "Giriş Hatalı";
  $GirisHatali=0;
}
}
 ?>
