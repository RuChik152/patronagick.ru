<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php
$query = $mysqli->query("SELECT `info_author`, `info_project`, `info_about`, `img` FROM `about` WHERE 1");
while ($row = mysqli_fetch_assoc($query)) {    
  $arr_about[] = array_values($row);    
}
?>
<!--content-->
<div class="wrap">
<div class="content">
    <section>
        <div class="section_about">
          <div class="section__topic_name">
            <h4>О поректе</h4>
            <div class="section__topic_name_line">
              <hr/>
              <hr/>
            </div>
          </div>
          <div class="section_about__block">
            <div class="section_about__block__portfolio_author">
                <div class="section_about__block__portfolio">
                    <img class="one" src="./images/<?php echo $arr_about[0][3]; ?>.png" alt="potfolio"/>
                    <img class="two" src="./images/portfolio_fon.svg" alt="portfolio_fon"/>
                </div>
                <div class="section_about__block__author">
                    <p><?php echo $arr_about[0][0];?></p>
                    <p><?php echo $arr_about[0][1];?></p>
                </div>
            </div>
            <hr/>
            <div class="section_about__block__text">
              <p><?php echo $arr_about[0][2];?></p>
            </div>
            <hr/>
          </div>
        </div>
    </section>
</div>
</div>
<!--end content-->
<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->