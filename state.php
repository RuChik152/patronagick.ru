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

$str = $arr_article[0][2];

$patterns = array();
$patterns[0] = '/[0-9][.]/ui';
$patterns[1] = '/[:]/ui';
$patterns[2] = '/[•]/ui';
$patterns[3] = '/[;]/ui';
$patterns[4] = '/[.]{2}/ui';
$patterns[5] = '/[*]{2}/ui';
$patterns[6] = '/[*]/ui';

$replacements = array();
$replacements[0] = '<h5>';
$replacements[1] = ':</h5><ul>';
$replacements[2] = '<li><span>';
$replacements[3] = ';</span></li>';
$replacements[4] = '.</span></li></ul>';
$replacements[5] = '<p>';
$replacements[6] = '</p>';

$str_mod = preg_replace($patterns, $replacements, $str);


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
          <div class="section_article_content">
          <?php if ($arr_article[0][1] == true) :?>
          <img src="./images/article/<?php echo $arr_article[0][1]; ?>.png" alt="img"/>
          <?php endif; ?>
            <div class="section_article_content-item">
                <?php if ($arr_article[0][2] == true) :?>
              <?php echo $str_mod;?>
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