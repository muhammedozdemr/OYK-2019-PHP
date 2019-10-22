<?php
include("db.php");
include("sabitler.php");
//$salt="+#½cvxc(}?dkc)";//md5 fonksiyonunda tekil çıktı üretmesidir.

if (isset( $_POST["adisoyadi"] )) {  // Form POST edilmiş...

  if($_POST["tur"] == "" ) {
    // TÜR seçilmemiş :(
    $HataMesaji[] = "Tür seçimi yapılmamış !";
  }

  if($_POST["parola"] == "" ) {
    // Parola yazılmamış
    $HataMesaji[] = "Parola girilmemiş !";
  }

  if($_POST["adisoyadi"] == "" ) {
    // İsim yazılmamış
    $HataMesaji[] = "Ad soyad girilmemiş !";
  }
  if($_POST["email"] == "" ) {
    // İsim yazılmamış
    $HataMesaji[] = "E-posta girilmemiş !";
  }
  if(strlen($_POST["parola"]) < 8 ) {
    // İsim yazılmamış
    $HataMesaji[] = "Parola en az 8 karakter olmalıdır!";
  }
  if($_POST["parola"] != $_POST["parolatekrar"]) {
    // İsim yazılmamış
    $HataMesaji[] = "Parola Aynı değil";
  }


  if( !isset($HataMesaji) ) {
    // Önce EKLEME için SQL hazırlayalım...
    $SQL = sprintf("
        INSERT INTO
          Kullanicilar
        SET
          email    = '%s',
          adisoyadi = '%s',
          parola    = '%s',
          tur       = '%s'  ",
    $_POST["email"],$_POST["adisoyadi"], md5($_POST["parola"].$salt), $_POST["tur"]);

    // SQL komutunu MySQL veritabanı üzerinde çalıştır!
    $rows  = mysqli_query($db, $SQL);

    echo "<h4>Kayıt eklendi...</h4>";
  }

}  // Form POST edilmiş...

?>


<h1>Üye Ekleme</h1>

<h3 style="color:red">
  <?php

    for ($i=0; $i < count($HataMesaji); $i++) {
      echo $HataMesaji[$i] . "<br />";
    }

  ?>
</h3>
<table  >
<form method="post" autocomplete="off">
<tr><td>E-posta:</td><td><input required type="email" name="email" value="<?php echo $_POST["email"];?>"></td></tr>
  <tr><td>Adı Soyadı:</td><td><input required type="text" name="adisoyadi" value="<?php echo $_POST["adisoyadi"];?>"></td></tr>
  <tr><td>Parola:</td><td><input required type="password" name="parola" value="<?php echo $_POST["parola"];?>"></td></tr>
  <tr><td>Parola Tekrar :</td><td><input required type="password" name="parolatekrar" value="<?php echo $_POST["parolatekrar"];?>"></td></tr>
  <tr><td>Tür:</td><td><select required name='tur'>
    <option value="">SEÇİNİZ</option>
    <option value="M" <?php if($_POST["tur"]== "M") echo "selected"; ?>>Müşteri</option>
    <option value="E" <?php if($_POST["tur"]== "E") echo "selected"; ?>>Esnaf</option>
  </select></td></tr>
  <tr><td colspan="2" ><input type="submit" name="" value="Üye Ekle (insert)"></td></tr>
</form>
