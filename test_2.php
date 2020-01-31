<?php

include "db_config.php";
print_r($_GET);

    $query = $mysqli->query('SELECT `menu_name` FROM `menu` WHERE 1');
    

    while ($row = mysqli_fetch_assoc($query)) {
    
        $row_str = $row['menu_name'];
        $arr_str[] = $row['menu_name'];

    }

    echo "<pre>";
    print_r($arr_str);
    echo "</pre>";

    // echo "<pre>";
    // // echo $arr_article;
    // print_r($arr_article);
    // echo "</pre>";

    // if ($arr_article[1][0] == true) {
    //     echo "существует";
    // }elseif($arr_article[1][0] == false) {
    //     echo "не существует";
    // }

    // $arr_article_str = implode("|", $arr_article);
    // echo $arr_article_str;
?>