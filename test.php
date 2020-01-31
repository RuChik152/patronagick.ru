<?php

include "db_config.php";

print_r($_GET);

?>
<h4>Добавить название организаций</h4>
<form action="test.php" method="GET">
    <input type="text" name="link" placeholder="ссылка">
    <input type="text" name="title" placeholder="название">
    <input type="text" name="address" placeholder="адрес">
    <input type="text" name="phone" placeholder="телефон">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="отправить">
</form>

<?php
if (isset($_GET['link']) && isset($_GET['title']) && isset($_GET['address']) && isset($_GET['phone']) && isset($_GET['email'])) {
    $link = $_GET['link'];
    $link = (string)$link;
    $title = $_GET['title'];
    $title = (string)$title;
    $address = $_GET['address'];
    $address = (string)$address;
    $phone = $_GET['phone'];
    $phone = (string)$phone;
    $email = $_GET['email'];
    $email = (string)$email;
    $query = $mysqli->query("INSERT INTO `organization`(`id`, `link`, `title`, `address`, `phone`, `email`) VALUES (null,'$link','$title','$address','$phone','$email')");
    header("Location: test.php");
    exit();
}
?>
<hr>
<h4>Добавить название пунктов меню</h4>
<form action="test.php" method="GET">
    <input type="text" name="menu_name" placeholder="название меню">
    <input type="submit" value="Отправить">
</form>
<?php 
if (isset($_GET['menu_name'])) {
    $menu_name = $_GET['menu_name'];
    $menu_name = (string)$menu_name;
    $query = $mysqli->query("INSERT INTO `menu`(`id`, `menu_name`) VALUES (null,'$menu_name')");
    header("Location: test.php");
    exit();
}

?>


