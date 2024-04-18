<?php
session_start();
if ($_SESSION["check2"] == "Yes") {
} else {
    echo "登入失敗，請重新登入！";
    header("Location:fail.php");
}
?>

<html>

<head>
    <meta charset="utf8">
    <title>reviewer.php</title>
</head>

<body>

<form method=POST action=showreview.php>
    <h1>Reviewer您好，歡迎進入論文評論網頁</h1><br/>
    <h3>論文評審決定</h3>
        <input  type="radio" name="person" value="Accept">Accept
        <input  type="radio" name="person" value="Minor Revision">Minor Revision
        <input  type="radio" name="person" value="Major Revision">Major Revision
        <input  type="radio" name="person" value="Reject">Reject<br/>
        <br/><br/>
        論文評論評語：<br/>
        <textarea name=judge></textarea><br/>
        <input type=submit><br/><br/>

        <a href="index.php">登出</a>
        
</body>

</html>