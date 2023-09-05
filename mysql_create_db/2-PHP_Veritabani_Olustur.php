<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Oluşturma - Örneği</title>
</head>

<body>

<?php 
// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti_bagimsiz.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------

$sql = "CREATE DATABASE okul;";			// Oluşturulacak Veritabanı Adı

mysqli_query($db,$sql);					// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'Okul Veritabanı OLUŞTURULDU.<br>';


$sql = "ALTER DATABASE `okul` DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;";			// VERİTABANI DİL SETİNİ utf8_general_ci OLARAK GÜNCELLE

mysqli_query($db,$sql);	
				// Bağlı Olan Veribanına Bağlan ve Oluştur.
echo 'Okul Veritabanı utf8_general_ci DİL SETİ EKLENDİ.';

?>

</body>

</html>


