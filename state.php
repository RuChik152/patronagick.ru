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
            
                if (isset($_GET['state_id']) && isset($_GET['topic_id'])) {
                    $state_id = $_GET['state_id'];
                    $topic_id = $_GET['topic_id'];
                    if ($arr_article[$state_id]) {
                        echo "<h4>".$arr_article[$state_id][0][]."</h4>";
                    }
                }

            ?>
          <h4>Первое прикладывание</h4>
          <div class="section__topic_name_line">
            <hr/>
            <hr/>
          </div>
        </div>
        <div class="section_article">
            <img class="line" src="./images/line_article.svg" alt="img"/>
            <div class="section_article_content">
                <div class="section_article_content-item">
                    <img src="./images/IMAGE_article.svg" alt="img"/>
                    <p>Структурализм абстрактен. undefined. Гедонизм осмысляет дедуктивный метод. Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Гедонизм осмысляет дедуктивный метод. Согласно мнению известных философов, дедуктивный метод естественно порождает и обеспечивает</p>
                </div>
                <img class="arrow-1" src="./images/strelka_1.svg" alt="strl"/>
                <div class="section_article_content-item">
                    <img src="./images/IMAGE_article.svg" alt="img"/>
                    <p>Структурализм абстрактен. undefined. Гедонизм осмысляет дедуктивный метод. Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Гедонизм осмысляет дедуктивный метод. Согласно мнению известных философов, дедуктивный метод естественно порождает и обеспечивает</p>
                </div>
                <img class="arrow-2" src="./images/strelka_2.svg" alt="strl"/>
                <div class="section_article_content-item">
                    <img src="./images/IMAGE_article.svg" alt="img"/>
                    <p>Структурализм абстрактен. undefined. Гедонизм осмысляет дедуктивный метод. Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Гедонизм осмысляет дедуктивный метод. Согласно мнению известных философов, дедуктивный метод естественно порождает и обеспечивает</p>
                </div>
                <div class="section_article_end">
                    <hr/>
                    <h6>КОНЕЦ</h6>
                    <hr/>
                </div>
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