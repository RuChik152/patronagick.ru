<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php
include "db_config.php";
$query = $mysqli->query('SELECT `link`, `title`, `address`, `phone`, `email` FROM `organization` WHERE 1');   
    while ($row = mysqli_fetch_assoc($query)) {    
        $arr_help[] = array_values($row);    
    }
?>
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
                <?php if (isset($arr_help[$i][1]) == true) :?>
                <a href="http://<?php echo $arr_help[$i][0]; ?>">
                    <h3><?php echo $arr_help[$i][1];?></h3>
                </a>
                <?php endif;?>
                <?php if ($arr_help[$i][2] == true) :?>
                <p><?php echo $arr_help[$i][2];?></p>
                <?php endif;?>
                <div class="section__help__mom__block-item_contacts">
                    <div class="section__help__mom__block-item_contact">
                    <?php if ($arr_help[$i][3] == true) :?>
                    <img src="./images/phone.svg" alt="phone"/>
                    <a href="tel:<?php echo $arr_help[$i][3];?>">
                        <h3><?php echo $arr_help[$i][3];?></h3>
                    </a>
                    <?php endif;?>
                    </div>
                    <div class="section__help__mom__block-item_contact">
                    <?php if ($arr_help[$i][4] == true) :?>
                    <img src="./images/mail_min.svg" alt="mail"/>
                    <a href="mailto:<?php echo $arr_help[$i][4];?>">
                        <h3><?php echo $arr_help[$i][4];?></h3>
                    </a>
                    <?php endif;?>
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
<?php 
// mysql_close($query);
?>
<!--end content-->
<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->
