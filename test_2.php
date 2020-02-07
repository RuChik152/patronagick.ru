<?php

include "db_config.php";

    $query = $mysqli->query('SELECT `text` FROM `test` WHERE 1');

    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_str[] = array_values($row);    
    }

    echo "<pre>";
    print_r($arr_str);
    echo "</pre>";
    echo "<hr>";
    echo $str;
    echo "<hr>";
    $str = $arr_str[0][0];
    echo $str;
    echo "<hr>";

    $patterns = array();
    $patterns[0] = '/[0-9][.]/ui';
    $patterns[1] = '/[:]/ui';
    $patterns[2] = '/[•]/ui';
    $patterns[3] = '/[;]/ui';
    $patterns[4] = '/[.]{2}/ui';

    $replacements = array();
    $replacements[0] = '<h5>';
    $replacements[1] = '</h5><ul>';
    $replacements[2] = '<li>';
    $replacements[3] = '</li>';
    $replacements[4] = '</li></ul>';

    $str_mod = preg_replace($patterns, $replacements, $str);

    echo $str_mod;

    



?>





