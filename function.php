<?php

function checkValue($item, $massege){
    if (isset($item) && trim($item) == ''){
        echo "<div class=\"error\"><p>".$massege."</p></div>";
    }
}



?>