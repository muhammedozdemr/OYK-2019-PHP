<?php
require("db.php");
include("sabitler.php");

$PAROLA=md5($_POST["parola"].$salt);
$SQL=
    "SELECT
          *
     FROM
          Kullanicilar
     WHERE
          email='{$_POST["email"]}' AND parola='$PAROLA' ";

$rows=mysqli_query($db,$SQL);

$KayitSayisi=mysqli_num_rows($rows);

if($KayitSayisi==1){
  echo "Giriş Başarılı";
  die();
}
else{
  echo "Kullanıcı Adı veya Parola Hatalı";
}
 ?>
<table>
<form method="post" autocomplete="off">
 <tr><td>  E-posta :</td><td><input required type="text" name="email" value="<?php echo $_POST["email"];?>"></td></tr>
  <tr><td>Parola:</td><td><input required type="password" name="parola" value="<?php echo $_POST["parola"];?>"></td></tr>
  <tr><td colspan="2"><input type="submit" name="" value="Giriş"></td></tr>
</form>
