<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->

<?php 
$query = $mysqli->query('SELECT `sub_menu_name`, `sub_menu_img` FROM `submenu` WHERE 1');
while ($row = mysqli_fetch_assoc($query)) {    
    $arr_heading[] = array_values($row);    
}

if (isset($_GET['topic_id'])) {
    $query_id = $_GET['topic_id'];
    $query_id = $query_id + 1;
    $query = $mysqli->query("SELECT `img`, `name`, `id_themes` FROM `theme` WHERE id=$query_id");
    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_topic_theme[] = array_values($row);    
    }

}    

?>

<!-- start content -->
<div class="wrap">
    <div class="content">
        <section>
            <div class="section__topic">
                <div class="section__topic_name">
                    <?php
                        if (isset($_GET['topic_id'])) {
                            $topic_id = $_GET['topic_id'];
                            if (isset($arr_heading[$topic_id])) {
                                echo "<h4>".$arr_heading[$topic_id][0]."</h4>";
                            }
                        }
                    ?>
                    <div class="section__topic_name_line">
                        <hr/>
                        <hr/>
                    </div>
                </div>
                <div class="section__topic_themes">    
                <?php
                        if (isset($arr_topic_theme)) {
                            for ($i=0; $i < count($arr_topic_theme); ++$i) {
                                $id_themes = $arr_topic_theme[$i][2];
                                echo    "<a href=\"article.php?article_id=$i&topic_id=$topic_id&id_themes=$id_themes\">
                                            <div class=\"section__topic_themes-item\">
                                                <div class=\"section__topic_themes-item-center\">
                                                    {$arr_topic_theme[$i][0]}
                                                    <h6>{$arr_topic_theme[$i][1]}</h6>
                                                </div>
                                            </div>
                                        </a>";
                            }
                        } else {
                            echo "<h1>Данные не найдены</h1>";
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end content -->

<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->