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
<?php   // VERİTABANINA KAYIT EKLEME 


// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------




?>
    
    <h1>Yeni üyelik</h1>
    
    <label class="info">"Üyelik formunu doldurarak ayrıcalıklardan hemen yararlanmaya başlayabilirsiniz
        (*) ile işaretli alanlar zorunludur."
    </label><br><br>

    <div class="form-group">
    <form action="Vize_Form_Sonuc.php" method="post">
        <label for="Ad">Adınız *</label><br>
        <input required type="text" id="Ad" name="Ad" value="" placeholder="Ad"><br><br>

        <label for="Soyad">Soyadınız *</label><br>
        <input required type="text" id="Soyad" name="Soyad" value="" placeholder="Soyad"><br><br>

        <label for="Email">E-Posta Adresini *</label><br>
        <input required type="email" id="Email" name="Email" value="" placeholder="Email"><br><br>

        <label for="Email">E-Posta Adresini (Tekrar) *</label><br>
        <input required type="email" id="Email" name="Email" value="" placeholder="Email"><br><br>

        <label for="Sifre">Şifre *</label><br>
        <input required type="password" id="Sifre" name="Sifre" value="" placeholder="Şifre"><br><br>


        <label for="Sifre">Şifre (Tekrar) *</label><br>
        <input required type="password" id="Sifre" name="Sifre" value="" placeholder="Şifre"><br>
        <br>
    
        <label for="Cinsiyet">Cinsiyet *</label>

            <label><input required type="radio" name="cinsiyet" value="Erkek"> Erkek</label> 
            <label><input required type="radio" name="cinsiyet" value="Kadın"> Kadın</label><br>


                <!--Doğum Tarihi-->

        <label for="DogumT">Doğum Tarihi *</label>

                <!--GÜN-->
            <select required name='günler' id='gün'>
            <option selected disabled>Gün</option>


            <?php
            
            
            for($i=1;$i<=31; $i++)
            
            {
            echo "<option value='$i'>$i </option>";
            }
            echo "</select>";
            ?>
            

        <br>

            <!--AY-->
            <select required name='aylar' id='ay'>
            <option selected disabled>Ay</option>
            
            <?php

            $aylar = array("Ocak" => "Ocak",
                           "Şubat" => "Şubat",
                           "Mart" => "Mart",
                           "Nisan" => "Nisan",
                           "Mayıs" => "Mayıs",
                           "Haziran" => "Haziran",
                           "Temmuz" => "Temmuz",
                           "Ağustos" => "Ağustos",
                           "Eylül" => "Eylül",
                           "Ekim" => "Ekim",
                           "Kasım" => "Kasım",
                           "Aralık" => "Aralık");
            foreach($aylar as $cikti)
            {
                echo "<option value='$cikti'>$cikti</option>";
            }
            echo "</select>";
        
            ?>

        <br>

            <!--YIL-->
            <select required name='yıllar' id='yıl'>
            <option selected disabled>Yıl</option>

        <?php
            $yıllar = 1900;
            $sayac  = 0;
            while($sayac<2022 && $yıllar<2022)  
            {
                
                $sayac++;
                $yıllar++;

                
                echo "<option value='$yıllar'>$yıllar</option>";
            } 
            echo "</select>"
            


        ?>




          <br>

            
          <!--ÜLKELER-->
       
          <label for="Ülke">Ülke *</label>
       
          <select required name="Ülke">
             <option>Türkiye</option>
          </select>
          
          <br><br>
            <!--ŞEHİRLER-->
          
        <label for="Sehir">Şehir *</label>
          
        <select required name="sehir">
<option value="Şehir" selected disabled>Şehir</option>
<option value="İstanbul">İstanbul</option>
<option value="Ankara">Ankara</option>
<option value="İzmir">İzmir</option>
<option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Aksaray">Aksaray</option>
<option value="Amasya">Amasya</option>
<option value="Antalya">Antalya</option>
<option value="Ardahan">Ardahan</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bartın">Bartın</option>
<option value="Batman">Batman</option>
<option value="Bayburt">Bayburt</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Düzce">Düzce</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Iğdır">Iğdır</option>
<option value="Isparta">Isparta</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Karabük">Karabük</option>
<option value="Karaman">Karaman</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kilis">Kilis</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Mardin">Mardin</option>
<option value="Mersin">Mersin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Şırnak">Şırnak</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yalova">Yalova</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
        </select>

        <br><br>
            <!--CEP TELEFON-->
        <label for="Cep">Cep Telefon Numaranız *</label>
        <p class="telefon">
            <input required type="tel" id="Cep" name="Cep" value="" placeholder="+90"> 
            <br><br>
            Örnek : +90 (507) 123 45 67
        </p>
        <br>
        
            <!--Sözleşme-->
        <label for="sözlesme">
            <input required type="checkbox"  name="Sözleşme" value="Sözleşmeyi Kabul Ediyorum">
            Üyelik Sözleşmesini kabul ediyorum
        </label><br>



            <!--Buton-->

        <button class="btn" type="Submit" name="buton">KAYDET</button>

    </div>
      </form>

     

        


    
</body>
</html>





