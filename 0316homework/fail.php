<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入失敗</title>
</head>
<body>
    <?php
    if($_SESSION["login"]!="no"){
        header("Location:0316error.php");
    }else{
        echo "登入失敗!<br/>
        網頁將在三秒後跳轉至登入頁面或<br/>";
        echo "<a href='logout.php'><h4>點這裡</h4></a>";
        header("refresh:3;url=logout.php");
    }
    ?>
    
</body>
</html>
<?php ob_flush();?>