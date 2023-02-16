<HTML>
<head>
    <meta charset="UTF8">
    <title>哈囉</title>
</head>
<body>
<?php
echo "Random integer from 1 to 100:";
$x=random_int(1,100);
if($x%2==1){
    echo $x;
    echo"是奇數!!";
}else{
    echo $x;
    echo"是偶數QQ";
}
?>
</body>
</HTML>