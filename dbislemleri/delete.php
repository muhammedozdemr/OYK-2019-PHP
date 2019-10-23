<?php
  include("db.php");

  // Adres satırından gelen ID bilgisini al.
  $ID    = $_GET["id"];

  if( isset($_POST["onay"]) ) {
    // Buraya geliyorsak, form gönderilmiş demektir.

    if( $_POST["onay"] == "SİL") {
      // Silme için gerekli SQL'i hazırlayalım
      $SQL = "DELETE FROM db_deneme_rehber WHERE id='{$_POST["id"]}' ";
      // Kaydı siliyoruz..
      $temp  = mysqli_query($db, $SQL);
      echo "Kayıt silindi";
      die();
    } else {
      echo "Onay verilmedi. Silme YAPILMADI !!!!";
    }

  }

  // Veri tabanından o ID'ye karşılık gelen satırı çek
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber WHERE id=$ID";

  // Sorgumuzu MySQL'e Gönder
  $rows  = mysqli_query($db, $SQL);

  // Gelen TEK satırlık cevabı row adlı değişkene yerleştir
  $row    = mysqli_fetch_assoc($rows);
  $id     = $row["id"];
  $adi    = $row["adi"];
  $soyadi = $row["soyadi"];
  $sehir  = $row["sehir"];

  echo "
    <h1>$adi $soyadi</h1>

    KayıtNo: $id<br />
    Adı: $adi<br />
    Soyadı: $soyadi<br />
    Şehir: $sehir<br />
  ";

?>

<form method="post">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <br />
  BU KİŞİYİ SİL:<input type="text" name="onay" placeholder="silmek için SİL yazınız.">
  <br /><br />
  <input type="submit" name="" value="SİL !">
</form>
