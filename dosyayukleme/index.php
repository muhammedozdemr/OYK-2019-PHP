
<?php

if(isset($_FILES["dosya"])){
$hedef = "uploads/";
$hedef_dosya = $hedef . basename($_FILES["dosya"]["name"]);

if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedef_dosya)) {
       echo "The file ". basename( $_FILES["dosya"]["name"]). " adlı dosya yuklendi.";
   } else {
       echo "dosya yuklenemedi.";
   }
}

?>



<form  method="post" enctype="multipart/form-data">
dosya seçiniz:  <input type="file" name="dosya" ><br><br>
    <input type="submit" value="dosya yukle">
</form>
