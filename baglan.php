<?php
try{
    $db =   new PDO("mysql:host=localhost;dbname=classicmodels;chraset=UTF8", "root", "");
}catch(PDOException $hata){
    echo "Hata! " . $hata->getMessage();
}
?>