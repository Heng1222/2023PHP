<?php
session_start();
$teacherid="teacher";
$teacherpd="teacher123";
$studentid="student";
$studentpd="student123";
$presidentid="president";
$presidentpd="president123";
if((isset($_POST["name"])&&isset($_POST["psd"]))){
    $meid=$_POST["name"];
    $mepd=$_POST["psd"];
    if (($meid==$teacherid && $mepd==$teacherpd)) {
        $_SESSION["type"]="teacher";
        $_SESSION["login"]="yes";
        echo "<a href='teacher.php'><b>teacher</b></a><br/><a href='student.php'><b>student</b></a>";
    }elseif ($meid==$studentid && $mepd==$studentpd) {
        $_SESSION["type"]="student";
        $_SESSION["login"]="yes";
        echo "<a href='student.php'><b>student</b></a>";
    }elseif ($meid==$presidentid && $mepd==$presidentpd) {
        $_SESSION["type"]="president";
        $_SESSION["login"]="yes";
        echo "<a href='teacher.php'><b>teacher</b></a><br/><a href='president.php'><b>president</b></a>";
    }else{
        $_SESSION["login"]="no";
        header("Location:fail.php");
    }
}else{header("Location:error.php");}

?>
