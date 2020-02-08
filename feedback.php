<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php include "function.php"; ?>
<!--content-->
<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
<div class="wrap">
<div class="content">
    <section>
        <div class="section_name">
            <h2>напишите нам</h2>
        </div>
        <div class="section_form"><img src="./images/feddback.svg" alt="feedback"/>
            <div class="section_form-items">
            <form action="feedback.php" method="POST">
                <?php checkValue($_POST['name'], 'Вы не заполнили поле Имя');?> 
                <input type="text" name="name" placeholder="Ваше имя" 
                <?php if (isset($_POST['name']) && trim()) {
                    # code...
                } ?>
                
                />
                <?php checkValue($_POST['email'], 'Вы не заполнили поле e-mail');?>
                <input type="email" name="email" placeholder="e-mail"/>
                <?php checkValue($_POST['massege'], 'Нельзя отправить пустое сообщение');?>
                <textarea name="massege" placeholder="Ваш вопрос"></textarea>
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
