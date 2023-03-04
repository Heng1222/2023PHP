<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單結果</title>
</head>
<body bgcolor="#FFC78E" text="#000000">
    <center><h1>表單結果</h1></center><hr size="3" color="gray" width="95%">
    <h2><blockquote><?php
    echo "學號 :";
        if(isset($_POST["studentID"])){
            $studentID=$_POST["studentID"];
            if($studentID==""){
                echo "資料輸入錯誤<br/>";
            }else{
                echo $studentID."<br/>";
            }
        }else{
            echo "資料輸入錯誤<br/>";
        }
    echo "姓名 :";
        if(isset($_POST["studentname"])){
            $name=$_POST["studentname"];
            if($name==""){
                echo "資料輸入錯誤<br/>";
            }else{
                echo $name."<br/>";
            }
        }else{
            echo "資料輸入錯誤<br/>";
        }
    echo "連絡電話 :";
        if(isset($_POST["phone"])){
            $phone=$_POST["phone"];
            if($phone==""){
                echo "資料輸入錯誤<br/>";
            }else{
                echo $phone."<br/>";
            }
        }else{
            echo "資料輸入錯誤<br/>";
        }  
    echo "年級 :";
        if(isset($_POST["grade"])){
            $grade=$_POST["grade"];
            echo $grade."級<br/>";
        }else{
            echo "資料輸入錯誤<br/>";
        }
    echo "是否繳系費 : "; 
        if(isset($_POST["2800"])){
            $pay=$_POST["2800"];
            if($pay=="yes"){
                echo "有繳系費的盤子<br/>";
            }else{
                echo "沒繳系費的可憐人<br/>";
            }
        }else{
            echo "資料輸入錯誤<br/>";
        }
    echo "團報人數 :";
        if(isset($_POST["people"])){
            $people=$_POST["people"];
            switch($people){
                case "1":
                    echo "只有我自己<br/>";
                    break;
                case "2":
                    echo "雙人組合<br/>";
                    break;
                case "3":
                    echo "三人行<br/>";
                    break;
                case "4":
                    echo "四海遊龍<br/>";
                    break;
            }
        }else{
            echo "資料輸入錯誤<br/>";
        }
    echo "備註 :<blockquote>";
        if(isset($_POST["tips"])){
            $tips=$_POST["tips"];
            echo nl2br(strip_tags($tips));
        }else{
            echo "資料輸入錯誤";
        }
    echo "</blockquote>";
    ?></blockquote></h2>
    
</body>
</html>