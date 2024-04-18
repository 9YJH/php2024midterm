<head>
    <meta charset="utf-8">
</head>

<form action="check.php" method="post">

    <h1>高大論文投稿系統</h1><br/>

    <h3>請選擇您的角色：</h3>
    <select>
    <option>請選擇您的角色：</option>
    <option>Chair</option>
    <option>Reviewer</option>
    <option>Author</option>
    </select>
    <br/>帳號：<input type="text" name="uID" value=""><br/>
    密碼：<input type="password" name="uPWD"><br/>



    <input type="submit" value="提交">

</form>
<?php require("include.inc") ?>
