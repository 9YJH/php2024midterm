<?php
require("include.inc")
?>

<body>
    <?php
    session_start();
    if ($_SESSION["check2"] == "Yes") {
    } else {
    echo "登入失敗，請重新登入！";
    header("Location:fail.php");
    }
    ?>
    <H1> Author您好，歡迎進入論文投稿網頁 </H1>
    <form method=POST action=showpaper.php>
        論文標題：<br/>
        <input type=text name=title><br/>
        作者姓名：<input type=text name=aName><br/>
        作者Email：<input type=text name=Email><br/>

        <br/><br/>
        論文摘要：<br/>
        <textarea name=sum></textarea><br/>
        <input type=submit><br/><br/>

        <a href="index.php">登出</a>
</body>
</html>