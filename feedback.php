<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->
<?php include "function.php"; ?>
<!--content-->
<?php


if (!empty($_POST) && trim($_POST['name'])!='' && trim($_POST['email'])!='' && trim($_POST['massege'])!='') {
    $massege = "Вам пришло письмо с сайта: \n".
           "Имя отправителя: ".$_POST['name']."\n".
           "E-mail отправителя ".$_POST['email']."\n".
           "Сообщение: ".$_POST['massege']."\n";
    mail ( 'info@mail.ru' , 'Сообщение с сайта' , $massege );
    header('location: thankyou.php');
}



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
                <input type="text" name="name" placeholder="Ваше имя" value="<?php saveValue($_POST['name']);?>"/>
                <?php checkValue($_POST['email'], 'Вы не заполнили поле e-mail');?>
                <input type="email" name="email" placeholder="e-mail" value="<?php saveValue($_POST['email']);?>"/>
                <?php checkValue($_POST['massege'], 'Нельзя отправить пустое сообщение');?>
                <textarea name="massege" placeholder="Ваш вопрос"><?php saveValue($_POST['massege']);?></textarea>
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
