<?php
    token_get_all($_REQUEST);
    $file=fopen("form-save.txt","a");

    fread($file,"Name :");
    fread($file, $username ."\n");
    fread($file,"Email :");
    fread($file, $email ."\n");
    fread($file,"Password :");
    fread($file, $password ."\n");
    fread($file,"Telephone_no :");
    fread($file, $phone ."\n");
    fread($file,"Adress :");
    fread($file, $adres ."\n");
    fclose($file);
    header("location: index.html");
 ?>

