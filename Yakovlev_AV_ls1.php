<?php
/*
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true? 2 знака равно (сравнение по значению). Интерпритатор переводит значение $b к типу int, чтобы провести сравнение. в результате $b = 5 
var_dump((int)'012345'); // Почему 12345? при переводе в int к целому числу получаем целое число 12345 без нуля в начале 
var_dump((float)123.0 === (int)123.0); // Почему false? 3 знака равно - это сравнение по значению и по типу. Тип справа и слева, разный.
var_dump((int)0 === (int)'hello, world'); // Почему true? при переводе (int)'hello, world' получается 0 и тип совпадает
*/
$god=date("Y");
$tlt='Lesson1';
$hdr='Begin';
// задание №2
$a=6;
$b=9;
echo "до a = $a , b = $b ";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "после a = $a , b = $b ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $tlt ?></title>
</head>
<body>
	<header>
		<div><h1><?= $hdr ?></h1></div>
	</header>
	<div class="footer">
		<p><?= 'Copyright ' . $god ?> </p>
	</div>
</body>
</html>
