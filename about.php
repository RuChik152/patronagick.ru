<?php

print_r($_GET);

?>
<?php include "array.php"; ?>
<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
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
                    <img class="one" src="./images/<?php echo $arr_about[0]; ?>.svg" alt="potfolio"/>
                    <img class="two" src="./images/portfolio_fon.svg" alt="portfolio_fon"/>
                </div>
                <div class="section_about__block__author">
                    <p><?php echo $arr_about[1];?></p>
                    <p><?php echo $arr_about[2];?></p>
                </div>
            </div>
            <hr/>
            <div class="section_about__block__text">
              <p><?php echo $arr_about[3];?></p>
              <p>Гедонизм осмысляет дедуктивный метод. Дискретность амбивалентно транспонирует гравитационный парадокс. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты. Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Аксиома силлог</p>
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