<?php
session_start();
?>

<meta charset="utf-8">
<?php
    if($_SESSION["check1"]=="No"){
        echo "登入失敗，請重新登入！";
        header("Refresh:3;url=index.php");
    }
    elseif($_SESSION["check2"]=="No"){
        echo "登入失敗，請重新登入！";
        header("Refresh:3;url=index.php");
    }
    elseif($_SESSION["check3"]=="No"){
        echo "登入失敗，請重新登入！";
        header("Refresh:3;url=index.php");
    }

?>