<?php

$arr_page = [
  ['Помощь маме'],
  ['Рубрики', 'Первая пища малыша', 'Уход за новорожденным', 'Душевный покой мамы', 'ох, уж этот животик', 'почему малыш желтый', 'прививки'],
  ['Задать вопрос'],
  ['о проекте']
];



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
          if (isset($arr)) 
          {
            for ($i=0; $i < count($arr); ++$i) {
                echo "<li><a class=\"mobile_font_size\" href=\"index.php?id=$i\">{$arr[$i][0]}</a>";
                    if (count($arr[$i]) > 1) {
                        echo "<ul class=\"down__menu\">";
                            for ($a=1; $a < count($arr[1]); ++$a) { 
                                echo "<li><a href=\"index.php?topic_id=$a\">{$arr[1][$a][0]}</a></li>";
                            }
                        echo "</ul>";
                    }
                echo "</li>";
            }
          }  
        ?>
        <!-- <li><a class="mobile_font_size" href="help_mom.html">ПОМОЩЬ МАМЕ</a></li>
        <li><a class="mobile_font_size" href="#">РУБРИКИ</a>
          <ul class="down__menu">
            <li><a href="topic.html">Первая пища малыша</a></li>
            <li><a href="#">Уход за новорожденным</a></li>
            <li><a href="#">Душевный покой мамы</a></li>
            <li><a href="#">Ох, уж этот животик</a></li>
            <li><a href="#">Почему малыш желтый</a></li>
            <li><a href="#">Прививки</a></li>
          </ul>
        </li>
        <li><a class="mobile_font_size" href="feedback.html">ЗАДАТЬ ВОПРОС</a></li>
        <li><a class="mobile_font_size about" href="about.html">О проекте</a></li> -->
      </ul>
    </div>
  </header>
  <!--end header-->