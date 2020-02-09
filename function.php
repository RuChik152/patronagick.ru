<?php

function checkValue($item, $massege){
    if (isset($item) && trim($item) == ''){
        echo "<div class=\"error\"><p>".$massege."</p></div>";
    }
}

function saveValue($item){
    if (isset($item) && strlen(trim($item)) > 0) {
        echo $item;}
}


?>