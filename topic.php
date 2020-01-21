<div class="section__topic">
    <div class="section__topic_name">
        <?php
            if (isset($_GET['topic_id'])) {
                $topic_id = $_GET['topic_id'];
                if (isset($arr[1][$topic_id][0])) {
                    echo "<h4>".$arr[1][$topic_id][0]."</h4>";
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
        
            if (isset($arr_topic_theme[$topic_id])) {
                for ($i=0; $i < count($arr_topic_theme[$topic_id]); ++$i) { 
                    echo    "<a href=\"index.php/article?article_id=$i\">
                                <div class=\"section__topic_themes-item\">
                                    <div class=\"section__topic_themes-item-center\">
                                        {$arr_topic_theme[$topic_id][$i][0]}
                                        <h6>{$arr_topic_theme[$topic_id][$i][1]}</h6>
                                    </div>
                                </div>
                            </a>";
                }
            } else {
                echo "<h1>Данные не найдены</h1>";
            }
        ?>
    </div>