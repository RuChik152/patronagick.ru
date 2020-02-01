<?php

// $query = $mysqli->query('SELECT `sub_menu_name`, `sub_menu_img` FROM `submenu` WHERE 1');
// while ($row = mysqli_fetch_assoc($query)) {    
//     $arr_heading[] = array_values($row);    
// }


echo "<div class=\"section__banner\"><a href=\"about.php\">
<div class=\"button\"> 
<p>{$arr_menu[3]}</p>
</div></a></div>";
echo '<div class="site__content__blocks">';
for ($i=0; $i < count($arr_heading); ++$i) { 
echo   "<a href=\"topic.php?topic_id=$i\">
            <div class=\"site__content__blocks_topic\">
                <div class=\"site__content__blocks_topic-item\">
                    {$arr_heading[$i][1]}
                <h6>{$arr_heading[$i][0]}</h6>
                </div>
            </div>
        </a>";
}
echo '</div>';

?>