<?php

include "db_config.php";

    $query = $mysqli->query('SELECT `text` FROM `test` WHERE 1');

    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_str[] = array_values($row);    
    }

    // echo "<pre>";
    // print_r($arr_str);
    // echo "</pre>";

    $str = $arr_str[0][0];
    echo $str;
    $str_arr = explode(".", $str);
    echo "<br>";
    echo "<pre>";
    print_r($str_arr);
    echo "</pre>";
    $str_2 = $str_arr[0];
    echo $str_2;
    $str_arr_2 = explode(":", $str_2);
    echo "<pre>";
    print_r($str_arr_2);
    echo "</pre>";
    $str_3 = $str_arr_2[1];
    echo $str_3;
    $str_arr_3 = explode(";", $str_3);
    echo "<pre>";
    print_r($str_arr_3);
    echo "</pre>";

?>
    <h5><?php echo $str_arr_2[0];?>:</h5>
    <ul>
        <?php for ($i=0; $i < count($str_arr_3); ++$i) :?>
        <li><?php echo $str_arr_3[$i];?>;</li>
        <?php endfor; ?>
    </ul>    
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>

<?php

    echo "<pre>";
    print_r($arr_str);
    echo "</pre>";
    $a = $arr_str[0][0];
    echo "<br>";
    echo $a;
    $b = str_ireplace("•", "<li>", $a);
    echo "<hr>";
    echo "<hr>";
    echo $b;
    $c = str_ireplace(";", "</li>", $b);
    echo "<hr>";
    echo "<hr>";
    echo $c;
    
   

?>


