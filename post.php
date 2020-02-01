<?php 
if (isset($_POST['sub_menu_name']) && isset($_POST['sub_menu_img'])) {
    $sub_menu_name = $_POST['sub_menu_name'];
    $sub_menu_name = (string)$sub_menu_name;
    $sub_menu_img = $_POST['sub_menu_img'];
    $sub_menu_img = (string)$sub_menu_img;
    $query = $mysqli->query("INSERT INTO `submenu`(`id`, `sub_menu_name`, `sub_menu_img`) VALUES (null,'$sub_menu_name', '$sub_menu_img')");
    header("Location: test.php");
    exit();
}
?>