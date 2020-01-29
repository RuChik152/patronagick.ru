<?php

if (isset($_GET['id'])) {
    if ($_GET['id'] == 3) {
        header("Location: about.php");
        exit();
    }elseif ($_GET['id'] == 2) {
        header("Location: feedback.php");
        exit();
    }elseif ($_GET['id'] == 0){
        header("Location: help_mom.php");
        exit();
    }
}

?>
<?php

print_r($_GET);

?>
<?php include "array.php"; ?>
<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->

<!-- start content -->
<div class="wrap">
    <div class="content">
        <section>
            <?php
                if (!isset($_GET['id'])) {
                    include "home.php";
                }
            ?>
        </section>
    </div>
</div>
<!-- end content -->

<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->