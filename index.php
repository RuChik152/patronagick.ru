<?php
if (isset($_GET['id'])) {
    if ($_GET['id'] == 3) {
        header("Location: about.php");
        exit();
    }elseif ($_GET['id'] == 2) {
        header("Location: feedback.php");
        exit();
    }elseif ($_GET['id'] == 0){
        header("Location: help_mom.php");
        exit();
    }
}


//  start header.php
 include "header.php"; 
// end header.php 


$query = $mysqli->query('SELECT `sub_menu_name`, `sub_menu_img` FROM `submenu` WHERE 1');
while ($row = mysqli_fetch_assoc($query)) {    
    $arr_heading[] = array_values($row);    
}
?>
<!-- start content -->
<div class="wrap">
    <div class="content">
        <section>
            <?php
                if (!isset($_GET['id'])) {
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
                }
            ?>
        </section>
    </div>
</div>
<!-- end content -->

<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->