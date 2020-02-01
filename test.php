<?php
include "db_config.php";
print_r($_POST);
?>
<h4>Добавить название организаций</h4>
<form action="test.php" method="POST">
    <input type="text" name="link" placeholder="ссылка">
    <input type="text" name="title" placeholder="название">
    <input type="text" name="address" placeholder="адрес">
    <input type="text" name="phone" placeholder="телефон">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="отправить">
</form>
<?php
if (isset($_POST['link']) && isset($_POST['title']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email'])) {
    $link = $_POST['link'];
    $link = (string)$link;
    $title = $_POST['title'];
    $title = (string)$title;
    $address = $_POST['address'];
    $address = (string)$address;
    $phone = $_POST['phone'];
    $phone = (string)$phone;
    $email = $_POST['email'];
    $email = (string)$email;
    $query = $mysqli->query("INSERT INTO `organization`(`id`, `link`, `title`, `address`, `phone`, `email`) VALUES (null,'$link','$title','$address','$phone','$email')");
    header("Location: test.php");
    exit();
    echo ' <script type="text/javascript"> location.reload(true); </script>';
}
?>
<hr>
<h4>Добавить название пунктов меню</h4>
<form action="test.php" method="POST">
    <input type="text" name="menu_name" placeholder="название меню">
    <input type="submit" value="Отправить">
</form>
<?php 
if (isset($_GET['menu_name'])) {
    $menu_name = $_POST['menu_name'];
    $menu_name = (string)$menu_name;
    $query = $mysqli->query("INSERT INTO `menu`(`id`, `menu_name`) VALUES (null,'$menu_name')");
    header("Location: test.php");
    exit();
    echo ' <script type="text/javascript"> location.reload(true); </script>';
}
?>
<hr>
<h4>Добавить название рубрики и код SVG</h4>
<form action="test.php" method="POST">
    <input type="text" name="sub_menu_name" placeholder="название рубрики">
    <input type="text" name="sub_menu_img" placeholder="svg код">
    <input type="submit" value="отправить">
</form>
<?php
if (isset($_POST['sub_menu_name']) && isset($_POST['sub_menu_img'])) {
    $sub_menu_name = $_POST['sub_menu_name'];
    $sub_menu_name = (string)$sub_menu_name;
    $sub_menu_img = $_POST['sub_menu_img'];
    $sub_menu_img = (string)$sub_menu_img;
    $query = $mysqli->query("INSERT INTO `submenu`(`id`, `sub_menu_name`, `sub_menu_img`) VALUES (null,'$sub_menu_name', '$sub_menu_img')");
    header("Location: test.php");
    exit();
    echo ' <script type="text/javascript"> location.reload(true); </script>';
}
?>
