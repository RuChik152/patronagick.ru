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
        <div class="section__topic_name">
            <?php             
                if (isset($_GET['state_id']) && isset($_GET['topic_id']) && isset($_GET['article_id'])) {
                    $state_id = $_GET['state_id'];
                    $topic_id = $_GET['topic_id'];
                    $article_id = $_GET['article_id'];
                    if (isset($arr_article[$article_id])) {
                        echo "<h4>".$arr_article[$article_id][$state_id][3]."</h4>";
                    }
                }
            ?>
          <div class="section__topic_name_line">
            <hr/>
            <hr/>
          </div>
        </div>
        <div class="section_article">
            <img class="line" src="./images/line_article.svg" alt="img"/>
          <div class="section_article_content">
              <img src="./images/state_img.png" alt="img"/>
            <div class="section_article_content-item">
              <p>Дискретность амбивалентно транспонирует гравитационный парадокс. Структурализм абстрактен. Структурализм абстрактен. Дискретность амбивалентно транспонирует гравитационный парадокс. Структурализм абстрактен. Дискретность амбивалентно транспонирует гравитационный парадокс.</p>
              <iframe src="https://www.youtube.com/embed/Y7cQOt2032k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
            </div>
          </div>
          <img class="line" src="./images/line_article.svg" alt="img"/>
        <div class="section_article_end">
            <hr/>
            <h6>КОНЕЦ</h6>
            <hr/>
        </div>
            <img class="line" src="./images/line_article.svg" alt="img"/>
        </div>
        </section>
    </div>
</div>
<!-- end content -->
<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->