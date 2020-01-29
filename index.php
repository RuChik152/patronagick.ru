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
                if (!isset($_GET['topic_id'])) {
                    include "home.php";
                }
                // if (isset($_GET['topic_id'])) {
                //     include "topic.php";
                // }
            ?>
            
        </section>
    </div>
</div>
<!-- end content -->

<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->