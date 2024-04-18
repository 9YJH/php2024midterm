<?php
session_start();
if ($_SESSION["check1"] == "Yes") {
} else {
    echo "登入失敗，請重新登入！";
    header("Location:fail.php");
}
?>

<html>

<head>
    <meta charset="utf8">
    <title>chair.php</title>
</head>

<body>

<a href="index.php">登出</a>
</body>

</html>
