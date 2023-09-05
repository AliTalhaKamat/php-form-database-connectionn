<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Talha Kamat | 211030029</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <!--PHP BASLANGİC-->
 <br><br>
 <?php   // VERİTABANINA KAYIT EKLEME 


// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------

$sql = "INSERT INTO `uyeler`(`uye_adi`, `uye_soyadi`, `kullanici_adi`, `kullanici_sifre`, `uye_e_posta`, `uye_cinsiyet`, `uye_dogum_tarihi`, `uye_telefon`, `uye_ulke`, `uye_sehir`, `uye_sozlesme_onay`) 
                 VALUES ('".$_POST["Ad"]."', '".$_POST["Soyad"]."','".$_POST["Email"]."','".$_POST["Sifre"]."','".$_POST["Email"]."','".$_POST["cinsiyet"]."',
                 '".$_POST["günler"]."/".$_POST["aylar"]."/".$_POST["yıllar"]."','".$_POST["Cep"]."','".$_POST["Ülke"]."','".$_POST["sehir"]."','".$_POST["Sözleşme"]."')";

mysqli_query($db,$sql);						// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'Okul Veritabanında "ÜYELER" Tablosuna Veri EKLENDİ.<br>';
echo 'Dilersiniz aşağıdaki butona tıklayarak Üyeler listesini kontrol edebilirsiniz...'




?>
<br><br><br>
<form action="5-PHP_Tablodan_Veri_Gosterme_SELECT.php" method="post">
<button class="btn" type="Submit" name="buton">Üyeler Listesi</button>
</form>
</body>
</body>

</html>