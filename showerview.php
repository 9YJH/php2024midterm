<?php
require("include.inc")
?>

<body>
    <?php
    session_start();
    if(isset($_SESSION["author"]))
        echo "論文標題".$_POST["title"]."<br/>作者姓名：".$_POST["sName"]."<br/>作者Email：".$_POST["Email"]."<br/>論文摘要：".nl2br($_POST["sum"]);
    else
        echo "<h1> 非法傳送 </h1>";
    ?>
    <br/><br/>
    <A href="logout.php">登出
</body>
</html>