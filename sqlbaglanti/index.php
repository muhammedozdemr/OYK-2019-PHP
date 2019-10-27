<?php
/*
İŞLEM ADIMLARI:
ADIM 1: Veritabanına bağlantı açılacak
ADIM 2: SQL çalıştırılacak
ADIM 3: Kayıt sayısı veya bulunamadı bilgisinin verilmesi
ADIM 4: Sonuç ekrana yazdırılacak
*/

$servername = "localhost";
$username   = "kullaniciadi";
$password   = "parola";
$dbname     = "veritabaniadi";

#### ADIM 1
#### ADIM 1
#### ADIM 1
// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";


###### ŞEHİR ADLARI İÇİN COMBO HAZIRLANMASI
  $SQL   = "SELECT DISTINCT il FROM referandum ORDER BY il";
  $rows  = mysqli_query($db, $SQL);
  $iller ="";
  while($row = mysqli_fetch_assoc($rows)) {
      $iller .= sprintf(
                "<option value='%s'>%s</option> \n",
                $row["il"], $row["il"]
              );
  }
?>



<form method="get">
  Lütfen şehir seçiniz:
  <select name="sehir" onchange="this.form.submit()">
    <?php echo $iller; ?>
  </select>
  <input type="submit" value="Getir!">
</form>

<?php
#### ADIM 2
#### ADIM 2
#### ADIM 2
//$SQL_SORGUMUZ = "SELECT il, ilce, evet, hayir from referandum where il='adana' ";
//$SORGU = "SELECT il, ilce, evet, hayir from referandum where il='adana' ";
$SEHIR = $_GET["sehir"];
$SQL   = "SELECT il, ilce, evet, hayir FROM referandum WHERE il='$SEHIR' ";
$rows  = mysqli_query($db, $SQL);

#### ADIM 3
#### ADIM 3
#### ADIM 3
$KayitSayisi = mysqli_num_rows($rows);
if ($KayitSayisi == 0) {
  // echo "Veri bulunamadı !"; die();
}


#### ADIM 4
#### ADIM 4
#### ADIM 4
$TabloBasi = "
<table border=1 cellspacing=0 cellpadding=5>
<tr>
  <td>İl</td>
  <td>İlce</td>
  <td>Evet</td>
  <td>Hayır</td>
</tr>
";
$TabloSonu = "</table>";

if( isset( $_GET["sehir"])) { // Şehir seçimi yapılmış

      echo "<h1>$SEHIR Referandum Sonuçları</h1>";
      echo $TabloBasi;

      while($row = mysqli_fetch_assoc($rows)) {

          echo sprintf("
                <tr>
                  <td>%s</td>
                  <td>%s</td>
                  <td>%s</td>
                  <td>%s</td>
                </tr>",
                $row["il"],
                $row["ilce"],
                $row["evet"],
                $row["hayir"]
              );

      } // while sonu

      echo $TabloSonu;

      echo "<p>Toplam $KayitSayisi kayıt bulundu.</p>";
} // Şehir seçimi yapılmış


mysqli_close($db);

?>
