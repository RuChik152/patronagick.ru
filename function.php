<?php

$arr_page = [
    ['Помощь маме', 'pfgbc'],
    ['Рубрики', 'Первая пища малыша', 'Уход за новорожденным', 'Душевный покой мамы', 'ох, уж этот животик', 'почему малыш желтый', 'прививки'],
    ['Задать вопрос']
];

echo "<pre>";
print_r($arr_page);
echo "</pre>";


    if (isset($arr_page)) {
        for ($i=0; $i < count($arr_page); ++$i) {
            echo "<li><a class=\"mobile_font_size\" href=\"index.php?id=$i\">{$arr_page[$i][0]}</a>";
                if (count($arr_page[$i]) > 1) {
                    echo "<ul class=\"down__menu\">";
                        for ($a=1; $a < count($arr_page[$i]); ++$a) { 
                            echo "<li><a href=\"index.php?head=$a\">{$arr_page[$i][$a]}</a></li>";
                        }
                    echo "</ul>";
                }
            echo "</li>";
        }
    }




?>