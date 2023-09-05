<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Tabloya Veri Ekleme Örneği</title>
</head>

<body>
<?php   // VERİTABANINA KAYIT EKLEME 


// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------

$sql = "INSERT INTO `uyeler`(`uye_adi`, `uye_soyadi`, `kullanici_adi`, `kullanici_sifre`, `uye_e_posta`, `uye_cinsiyet`, `uye_dogum_tarihi`, `uye_telefon`, `uye_ulke`, `uye_sehir`, `uye_sozlesme_onay`) 
	                 VALUES ('İsmail', 'KEKLİK','ismailkeklik44@gmail.com','1234','ismailkeklik44@gmail.com','Erkek','01.01.1987','05076026444','Türkiye','Malatya','Sözleşmeyi kabul ediyorum')";

mysqli_query($db,$sql);						// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'Okul Veritabanında "ÜYELER" Tablosuna Veri EKLENDİ.';


?>
</body>

</html>
