<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"Telephone_no :");
    fwrite($file, $phone ."\n");
    fwrite($file,"Adress :");
    fwrite($file, $adres ."\n");
    fclose($file);
    header("location: index.html");
 ?>

