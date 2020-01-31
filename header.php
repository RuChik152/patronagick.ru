<?php

// include "db_config.php";
// $query = $mysqli->query('SELECT `menu_name` FROM `menu` WHERE 1');
    
// while ($row = mysqli_fetch_assoc($query)) {
//     $row_str = $row['menu_name'];
//     $arr_menu[] = $row['menu_name'];}
include "array.php";
?>
<!DOCTYPE html>
<html lang="ru"></html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Потронажик</title>
  <link rel="stylesheet" href="./css/normalize.css"/>
  <link rel="stylesheet" href="./css/styles.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap"/>
</head>
<body>
  <!--header-->
  <header>
    <div class="main__menu"><a href="index.php">          <img src="./images/logo.svg" alt="logo"/></a><img class="mobile_banner" src="./images/banner.png" alt="baner"/>
      <ul class="main__menu__item clearfix down_menu--horz">
        <?php         
          if (isset($arr_menu)){
            for ($i=0; $i < count($arr_menu); ++$i) {
                if ($i != 1) {
                  echo "<li><a class=\"mobile_font_size\" href=\"index.php?id=$i\">{$arr_menu[$i]}</a>";
                } else {
                  echo "<li><a class=\"mobile_font_size\" href=\"index.php\">{$arr_menu[$i]}</a>";
                }
                $key = key($arr_menu);
                next($arr_menu);
                  if ($key == 1) {
                    echo "<ul class=\"down__menu\">";
                      for ($a=0; $a < count($arr_heading); ++$a) { 
                        echo "<li><a href=\"topic.php?topic_id=$a\">{$arr_heading[$a][0]}</a></li>";
                      }
                    echo "</ul>";
                }
                echo "</li>";
            }
          } else {
            echo "Ошибка, данные не найдены";
          }    
        ?>
      </ul>
    </div>
  </header>
  <?php 
  // mysql_close($query); 
  ?>
  <!--end header-->