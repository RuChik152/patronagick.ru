<?php

print_r($_GET);

?>
<?php include "array.php"; ?>
<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->

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
                            echo "<h4>".$arr_topic_theme[$topic_id][$article_id][1]."</h4>";
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
                            for ($i=0; $i < count($arr_article[$article_id]); ++$i) { 
                            echo   "<div class=\"section__themes_article_block\">
                                        <img src=\"{$arr_article[$article_id][$i][0]}\" alt=\"img\"/>
                                        <div class=\"section__themes_article_block-item\">
                                            <a href=\"state.php?state_id=$i&topic_id=$topic_id\">
                                                <p>{$arr_article[$article_id][$i][3]}</p>
                                            </a>
                                            <a class=\"button\" href=\"state.php?state_id=$i&topic_id=$topic_id\">Далее<img src=\"./images/move.svg\" alt=\"move\"/>
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