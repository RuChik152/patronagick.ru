<?php

?>
<!-- start header.php -->
<?php include "header.php"; ?>
<!-- end header.php -->

<!-- start content -->
<div class="wrap">
    <div class="content">
        <section>
            <?php
                if (!isset($_GET['p_id'])) {
                    echo "<div class=\"section__banner\"><a href=\"about.html\">
                    <div class=\"button\"> 
                      <p>О ПРОЕКТЕ</p>
                    </div></a></div>";
                }
            ?>
            
        </section>
    </div>
</div>
<!-- end content -->

<!-- start footer.php -->
<?php include "footer.php"; ?>
<!-- end footer.php -->