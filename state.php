<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php
if (isset($_GET['id_note'])) {
  $query_id = $_GET['id_note'];
  $query = $mysqli->query("SELECT `name`, `img`, `text`, `link` FROM `articles` WHERE id_note=$query_id");
  while ($row = mysqli_fetch_assoc($query)) {    
    $arr_article[] = array_values($row);    
}
}
?>

<!-- start content -->
<div class="wrap">
    <div class="content">                                              
        <section>
        <div class="section__topic_name">
            <?php             
                if (isset($_GET['state_id']) && isset($_GET['topic_id']) && isset($_GET['article_id'])) {
                    if (isset($arr_article)) {
                        echo "<h4>".$arr_article[0][0]."</h4>";
                    }
                }
            ?>
          <div class="section__topic_name_line">
            <hr/>
            <hr/>
          </div>
        </div>
        <?php if (isset($arr_article)) :?>
        <div class="section_article"><img class="line" src="./images/line_article.svg" alt="img"/>
          <div class="section_article_content"><img src="./images/<?php echo $arr_article[0][1]; ?>.png" alt="img"/>
            <div class="section_article_content-item">
                <?php if ($arr_article[0][2] == true) :?>
              <p><?php echo $arr_article[0][2];?></p>
                <?php endif;?>
              <?php if ($arr_article[0][3] == true) :?>
              <iframe src="https://<?php echo $arr_article[0][3];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
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