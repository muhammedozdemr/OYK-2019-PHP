<?php
include("db.php");
if(isset($_POST["adi"])){
  $SQL = sprintf("
      INSERT INTO
        kullanicikayit
      SET
      
        adi    = '%s',
        soyadi    = '%s'  ",

  $_POST["adi"], $_POST["soyadi"]);

  $rows  = mysqli_query($db, $SQL);

echo "<h1>Kayıt Eklendi...</h1>";
}
 ?>
<form method="post">
  Adınız:<input type="text" name="adi" value=""><br><br>
  Soyadınız:<input type="text" name="soyadi" value=""><br><br>
  <input type="submit"  value="EKLE">
</form>
