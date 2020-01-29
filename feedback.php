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
        <div class="section_name">
            <h2>напишите нам</h2>
        </div>
        <div class="section_form"><img src="./images/feddback.svg" alt="feedback"/>
            <div class="section_form-items">
            <form action="feedback.php" method="GET">
                <input type="text" name="name" placeholder="Ваше имя"/>
                <input type="text" name="mail" placeholder="e-mail"/>
                <textarea name="text" placeholder="Ваш вопрос"></textarea>
                <input class="button" type="submit" value="ОТПРАВИТЬ"/>
            </form>
            </div>
        </div>
    </section>
</div>
</div>
<!--end content-->
<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->
