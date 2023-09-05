<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanına Tablo Oluşturma Örneği</title>
</head>

<body>
<?php 
// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------

$sql = "CREATE TABLE `okul`.`uyeler`  
	  (`uye_id` INT AUTO_INCREMENT , 
	   `uye_adi` VARCHAR(50), 
	    `uye_soyadi` VARCHAR(50), 
	    `kullanici_adi` VARCHAR(100), 
	    `kullanici_sifre` VARCHAR(25), 
	    `uye_e_posta` VARCHAR(50), 
	    `uye_cinsiyet` VARCHAR(25),
	    `uye_dogum_tarihi` VARCHAR(50),
	    `uye_telefon` VARCHAR(25), 
	    `uye_ulke` VARCHAR(50), 
	    `uye_sehir` VARCHAR(50), 
	    `uye_sozlesme_onay` VARCHAR(255),    
	     PRIMARY KEY (`uye_id`)) ENGINE = InnoDB;"; 

mysqli_query($db,$sql);						// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'okul Veritabanına "UYELER" Tablosu OLUŞTURULDU.';

?>

</body>

</html>
