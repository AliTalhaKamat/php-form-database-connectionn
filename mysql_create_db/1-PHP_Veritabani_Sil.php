<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Silme </title>
</head>

<body>
<?php 

require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 


$sql = "DROP DATABASE okul;";			// Oluşturulacak Veritabanı Adı

mysqli_query($db,$sql);						// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'Okul Veritabanı SİLİNDİ.';

?>
</body>

</html>
