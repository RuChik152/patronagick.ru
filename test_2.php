<?php

include "db_config.php";
print_r($_GET);

    $query = $mysqli->query('SELECT `submenu_thems_img`, `submenu_thems_name` FROM `submenu_thems` WHERE id=1');

    // while ($row = mysqli_fetch_assoc($query)) {
    //     $arr_str[] = $row['menu_name'];
    // }

    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_str[] = array_values($row);    
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