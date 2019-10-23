<?php
  include("db.php");
?>

<h1>Kayıt Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>Kayıt#</td>
    <td>ADI</td>
    <td>SOYADI</td>
    <td>ŞEHİR</td>
    <td colspan="4">Kayıt İşlemleri</td>

  </tr>
  <?php
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber ORDER BY adi, soyadi, sehir ";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) {//Kayıt adedince döner.
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
          <td><a href='update.php'>Güncelle</a></td>
          <td><a href='delete.php'>Sil</a></td>
          <td><a href='insert.php'>Ekle</a></td>
          <td><a href='show.php'>Göster</a></td>
        </tr>", $row["id"], $row["adi"], $row["soyadi"], $row["sehir"],
      $row[""],$row[""],$row[""],$row[""] );
  }

  ?>
</table>
