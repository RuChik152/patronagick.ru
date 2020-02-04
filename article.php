<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php  
if (isset($_GET['article_id']) && isset($_GET['topic_id']) && isset($_GET['id_themes'])) {
    $query_id = $_GET['id_themes'];
    $query = $mysqli->query("SELECT `name` FROM `theme` WHERE id_themes=$query_id");
    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_topic_theme[] = array_values($row);    
    }

    $query = $mysqli->query("SELECT `img_min`, `name`, `id_note` FROM `articles` WHERE id_themes=$query_id");
    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_article[] = array_values($row);    
    }
}
?>

<!-- start content -->
<div class="wrap">
    <div class="content">
        <section>
            <div class="section__themes">
                <div class="section__topic_name">
                    <?php
                        if (isset($_GET['article_id']) && isset($_GET['topic_id'])) {
                            $article_id = $_GET['article_id'];
                            $topic_id = $_GET['topic_id'];
                            echo "<h4>".$arr_topic_theme[0][0]."</h4>";
                        }
                    ?>
                    <div class="section__topic_name_line">
                        <hr/>
                        <hr/>
                    </div>
                </div>
                <div class="section__themes_article">
                    <?php
                        if (isset($_GET['article_id'])) {
                            for ($i=0; $i < count($arr_article); ++$i) { 
                            echo   "<div class=\"section__themes_article_block\">
                                        <img src=\"./images/{$arr_article[$i][0]}.png\" alt=\"img\"/>
                                        <div class=\"section__themes_article_block-item\">
                                            <a href=\"state.php?article_id=$article_id&state_id=$i&topic_id=$topic_id&id_note={$arr_article[$i][2]}\">
                                                <p>{$arr_article[$i][1]}</p>
                                            </a>
                                            <a class=\"button\" href=\"state.php?article_id=$article_id&state_id=$i&topic_id=$topic_id&id_note={$arr_article[$i][2]}\">Далее<img src=\"./images/move.svg\" alt=\"move\"/>
                                            </a>
                                        </div>
                                    </div>";
                            }
                        }else{
                            echo "<h1>Данные не найдены</h1>";
                        }                    
                    ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end content -->


<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->