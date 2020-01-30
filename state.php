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
                        echo "<h4>".$arr_article[$article_id][$state_id][2]."</h4>";
                    }
                }
            ?>
          <div class="section__topic_name_line">
            <hr/>
            <hr/>
          </div>
        </div>
        <?php if (isset($_GET['state_id']) && isset($_GET['topic_id']) && isset($_GET['article_id'])) :?>
        <div class="section_article"><img class="line" src="./images/line_article.svg" alt="img"/>
          <div class="section_article_content"><img src="./images/<?php echo $arr_article[$article_id][$state_id][1]; ?>.png" alt="img"/>
            <div class="section_article_content-item">
                <?php if (isset($arr_article[$article_id][$state_id][3])) :?>
              <p><?php echo $arr_article[$article_id][$state_id][3];?></p>
                <?php endif;?>
              <?php if (isset($arr_article[$article_id][$state_id][4])) :?>
              <iframe src="https://<?php echo $arr_article[$article_id][$state_id][4];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
              <?php endif;?>
              <?php endif;?>
            </div>
          </div><img class="line" src="./images/line_article.svg" alt="img"/>
          <div class="section_article_end">
            <hr/>
            <h6>КОНЕЦ</h6>
            <hr/>
          </div>
        </div>
      </section>
    </div>
  </div>
<!-- end content -->


<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->