<?php
    import_request_variables($_REQUEST);
    while(!feof)
    $file=fopen("form-save.txt","r");

    fread($file,"Name :");
    fread($file, $username);
    fread($file,"Password :");
    fread($file, $password);
    fclose($file);
    header("location: homepage.html");
    echo $username;
 ?>

