<?php
require("include.inc") 
?>

<body>
    <?php
    session_start();
    session_destroy();
    header("location:index.php")
    ?>
</body>
</html>