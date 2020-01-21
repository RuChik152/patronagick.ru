<?php


echo '<div class="section__banner"><a href="about.html">
<div class="button"> 
<p>О ПРОЕКТЕ</p>
</div></a></div>';
echo '<div class="site__content__blocks">';
for ($i=1; $i < count($arr[1]); ++$i) { 
echo   "<a href=\"index.php?topic_id=$i\">
            <div class=\"site__content__blocks_topic\">
                <div class=\"site__content__blocks_topic-item\">
                    {$arr[1][$i][1]}
                <h6>{$arr[1][$i][0]}</h6>
                </div>
            </div>
        </a>";
}
echo '</div>';



?>