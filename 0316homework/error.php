<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>錯誤</title>
</head>
<body>
    非法進入網頁!!<br>
    網頁將在三秒後跳轉至登入頁面或<br/>
    <a href="logout.php"><h4>點這裡</h4></a>
    <?php
    header("refresh:3;url=logout.php");
    ?>
</body>
</html>