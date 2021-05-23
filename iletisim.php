<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="menü2.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body id="iletisimbody">
    <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top text-white" id="menuu">
        <div class="container-fluid py-2 row">
            <a href="" id="ad" class="navbar-brand mr-auto mx-3">Berat Kalhan</a>
           <button type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
           <div class="menukutu collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="menu.html">MENÜ</a>
              </li>
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="özgecmis.html">ÖZGEÇMİŞ</a>
              </li>
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="#">İLGİLENDİKLERİM</a>
              </li>
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="sehrim2.html">ŞEHRİM</a>
              </li> 
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="mirasımız.html">MİRASIMIZ</a>
              </li>   
              <li class="nav-item text-white">
                  <a id="ul1" class="nav-link px-3" href="#">İLETİŞİM</a>
              </li>
              <ul class="navbar-nav">
                  <li class="nav-item text-white">
                      <a id="ul1" class="nav-link px-3" href="login.php">LOGİN</a>
                  </li>
               </ul>
      </div>
        </div>
          </nav> 
    <section id="iletisim">
        <div class="container">
            <form name="myform" onsubmit="FormKontrol()" method="POST" action="iletisimbilgilerial.php" >
            <div id="iletisimkutu">
                <h1 id="h3iletisim">İletişim</h1>
                <div id="formgrup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="kullanıcı adı"  class="form-control" id="kadi" >
                        <input type="password" name="tel" placeholder="anahtar kelime" required  class="form-control" id="telo" >
                    </div>
                    <div id="sagform">
                        <input type="text" name="E-posta" placeholder="posta" required  class="form-control" id="postaa" >
                        <input type="text" name="konu" placeholder="Konu baslığı" required  class="form-control" id="konuu" >
                    </div>
                   
                <textarea name="mesaj" cols="30" placeholder="Mesaj giriniz" rows="10"  class="form-control" id="acıklama">
                </textarea>
                <div class="container" id="butonlar">
                    <input type="submit" value="Gönder" class="btnsub" name="gonder">
                    <input type="reset" value="Temizle" class="btnsub" name="temiz">
                    <input type="radio" id="radioer" name="gender">Erkek
                    <input type="radio" id="radiokad" name="gender">Kadın
                </div>
                </div>
                <div id="adres">
                    <h4>Adres : </h4>
                    <p>İstanbul pendik </p>
                    <p>fenerbahçe mahallesi</p>
                    <p>sarı lacivert caddesi no:6 studio:3</p>
                    <p>0606 060 60 60</p>
                    <p>E-mail : beratkalhan69gmail.com</p>
                </div>

            </form>
             </div>

        </div>

    </section>
    
    
</body>
</html>
<?php
    $_kullanıcıadıal = $_POST['isim'];
    $_epostaal = $_POST['E-posta'];
    $_telal = $_POST['tel'];
    $_konual = $_POST['konu'];
    $_acıklamaal = $_POST['acıklama'];
    
     $_SESSION["user"] = $_POST["isim"];
    header("location:iletisimbilgilerial.html");
    
    
    
    ?>