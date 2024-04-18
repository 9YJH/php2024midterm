<?php
session_start();
?>

<meta charset="utf8">
<?php
$sID1="chair";
$sPWD1="123";
$sID2="reviewer";
$sPWD2="234";
$sID3="author";
$sPWD3="345";

$uID=$_POST["uID"];
$uPWD=$_POST["uPWD"];

$date = strtotime("+7 days",time());

if($sID1==$uID && $sPWD1 == $uPWD){
    $_SESSION["check1"]="Yes";
    $_SESSION["check2"]="No";
    $_SESSION["check3"]="No";
    setcookie("userName",$uID,$date);
    header("Location：chair.php");
}
elseif($sID2==$uID && $sPWD2 == $uPWD){
    $_SESSION["check2"]="Yes";
    $_SESSION["check1"]="No";
    $_SESSION["check3"]="No";
    setcookie("userName",$uID,$date);
    header("Location：reviewer.php");
}
elseif($sID3==$uID && $sPWD3 == $uPWD){
    $_SESSION["check3"]="Yes";
    $_SESSION["check1"]="No";
    $_SESSION["check2"]="No";
    setcookie("userName",$uID,$date);
    header("Location：author.php");
}else{
    print "登入失敗!" . "<br>";
    header("Refresh:1;url=index.php");
}
