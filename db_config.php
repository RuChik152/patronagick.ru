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
    
    // $query = $mysqli->query('SELECT `name`, `description`, `text`, `img` FROM `article` WHERE 1');
    
    // while ($row = mysqli_fetch_assoc($query)) {
    
    //     $arr_article[] = array_values($row);
    
    // }

?>