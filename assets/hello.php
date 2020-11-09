<html>
<head>
    <title>Лабораторная работа 1, Белодед Александр</title>
</head>
<body>
<?echo "Hello World" . "<br>" . "Its my first lab"?>
</body>
</html>

<?php
function sumArray($arr){

    foreach ($arr as $item){
    echo  $item + 1 . "<br>";
}

}

$sdf =[1, 2, 3, 4, 5];
echo "<br>";

sumArray($sdf);
?>