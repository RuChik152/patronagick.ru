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
    <div class="section__help">
        <div class="section__topic_name">
        <h4>Помощь маме</h4>
        <div class="section__topic_name_line">
            <hr/>
            <hr/>
        </div>
        </div>
        <div class="section__help__mom">
            <?php if (isset($arr_help)) : ?>
            <?php for ($i=0; $i < count($arr_help); $i++) : ?>
            <div class="section__help__mom__block">
                <hr/>
                <div class="section__help__mom__block-item">
                <a href="https://www.<?php echo $arr_help[$i][0]; ?>">
                    <h3><?php echo $arr_help[$i][1];?></h3>
                </a>
                <p><?php echo $arr_help[$i][2];?></p>
                <div class="section__help__mom__block-item_contacts">
                    <div class="section__help__mom__block-item_contact">
                    <img src="./images/phone.svg" alt="phone"/>
                    <a href="tel:<?php echo $arr_help[$i][3];?>">
                        <h3><?php echo $arr_help[$i][3];?></h3>
                    </a>
                    </div>
                    <div class="section__help__mom__block-item_contact">
                    <img src="./images/mail_min.svg" alt="mail"/>
                    <a href="mailto:<?php echo $arr_help[$i][4];?>">
                        <h3><?php echo $arr_help[$i][4];?></h3>
                    </a>
                    </div>
                </div>
                </div>
                <hr/>
            </div>
            <?php endfor;?>
            <?php endif;?>
        </div>
    </div>
    </section>
</div>
</div>
<!--end content-->
<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->
