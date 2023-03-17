<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>presicent</title>
</head>
<body>
<h1 align="center"><b>這是president頁面</b></h1><br/>
    <p align="center">
        <h3><a href="logout.php">登出</a><h3>
    </p>
    <?php
    if($_SESSION["login"]!="yes" || $_SESSION["type"]!="president"){
        header("Location:error.php");
    }
    ?>
</body>
</html>