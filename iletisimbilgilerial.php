<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $_kullanıcıadıal = $_POST['isim'];
    $_epostaal = $_POST['E-posta'];
    $_telal = $_POST['tel'];
    $_konual = $_POST['konu'];

    
    
    echo "isim : " .$_kullanıcıadıal;
    <br>
    echo "e-posta : ".$_epostaal;
    <br>
    echo "anahtar kelime : ".$_telal;
    <br>
    echo "konu : ".$_konual;
    
    
    ?>
</body>
</html>