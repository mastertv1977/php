<?php
// задание №5
$god=date("Y");
$tlt='Lesson2';
$hdr='Begin';
// задание №1
$a=6;
$b=-1;
if ($a>=0 && $b>=0) {
	echo 'разность а и b равна: ' . ($a-$b) . '</br>';
} elseif ($a<0 && $b<0) {
	echo 'произведеие а и b равно: ' . ($a*$b) . '</br>';
} else {
	echo 'сумма а и b равна: ' . ($a+$b) . '</br>';
}
// задание №2
$a = -1;
switch ($a){
	case 0:
		echo '0,';
	case 1:
		echo '1,';
	case 2:
		echo '2,';
	case 3:
		echo '3,';
	case 4:
		echo '4,';
	case 5:
		echo '5,';
	case 6:
		echo '6,';
	case 7:
		echo '7,';
	case 8:
		echo '8,';
	case 9:
		echo '9,';
	case 10:
		echo '10,';
	case 11:
		echo '11,';
	case 12:
		echo '12,';
	case 13:
		echo '13,';
	case 14:
		echo '14,';
	case 15:
		echo '15' . '</br>';
	break;
	default:
		echo '$a меньше нуля или больше 15' . '</br>';
	break;
}
// задание №3
function summ($x, $y)
{
	return ($x + $y);
}
function razn($x, $y)
{
	return ($x - $y);
}
function proiz($x, $y)
{
	return ($x * $y);
}
function delen($x, $y)
{
	return ($x / $y);
}
// задание №4
function mathOperation($x, $y, $operation)
{
	switch ($operation)
	{
		case 'sum':
			return summ($x, $y);
		break;
		case 'diff':
			return razn($x, $y);
		break;
		case 'mult':
			return proiz($x, $y);
		break;
		case 'div':
			return delen($x, $y);
		break;
		default:
			return null;
		break;
	}
}
$opr='sum'; // sum, diff, mult, div
$arg1=5;
$arg2=5;
echo "$arg1 $opr $arg2 = " . mathOperation($arg1, $arg2, $opr) . '</br>';
// задание №6

function power($val, $pow)
{
	if ($pow>0){
		return $val*power($val, $pow-1);
	} elseif ($pow<0) {
		return 1/$val*power($val, $pow+1);
	} else {
		return 1;
	}
}

$arg1=2;
$arg2=-2;
echo "$arg1 в степени $arg2 = " . power($arg1, $arg2) . '</br>';

// задание №6

function vremya()
{
	$h=date("H");
	$m=date("i");
	if ($h=='00'||$h=='05'||$h=='06'||$h=='07'||$h=='08'||$h=='09'||$h=='10'||$h=='11'||$h=='12'||$h=='13'||$h=='14'||$h=='15'||$h=='16'||$h=='18'||$h=='19'||$h=='20'){
		$h = $h . ' часов';
	}elseif ($h=='02'||$h=='03'||$h=='04'||$h=='22'||$h=='23'||$h=='24') {
		$h = $h . ' часа';
	} else {
		$h = $h . ' час';
	}
	if (substr($m, 1)=='2'||substr($m, 1)=='3'||substr($m, 1)=='4'||substr($m, 1)=='2'){
		$m = $m . ' минуты';
	} elseif (substr($m, 1)=='1') {
		$m = $m . ' минута';
	} else{
		$m = $m . ' минут';
	}
	echo "$h $m" . '</br>';
	
}

vremya();

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
