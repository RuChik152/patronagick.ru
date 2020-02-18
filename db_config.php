<?php

//db_config.php
    $host = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'patronagick';

    $mysqli = mysqli_connect(
        $host, 
        $dbuser, 
        $dbpass, 
        $dbname
    );

    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        exit();
    }
    
    $mysqli->set_charset('utf8');
    


?>