<?php
$god=date("Y");
$tlt='Lesson3';
$hdr='Begin';

// задание №1
$n = 100;
$i = 0;
while ($i <= $n) {
	if ($i%3==0) {
		echo "$i<br/>";
		$i=$i+3;
	} else {
		$i++;
	}

}
// задание №2
$n = 10;
$i = 0;
do{

	if ($i%2==0&&$i>0) {
		echo "$i - чётное число.<br/>";
	} elseif ($i%2==1) {
		echo "$i - нечётное число.<br/>";
	} else {
		echo "$i - это ноль.<br/>";
	}
	$i++;

} while ($i <= $n);
// задание №3
$cities = [];
$cities['Тюменская область'][]='Тюмень';
$cities['Тюменская область'][]='Сургут';
$cities['Тюменская область'][]='Лянтор';
$cities['Тюменская область'][]='Нижневартовск';
$cities['Курганская область'][]='Курган';
$cities['Курганская область'][]='Шадринск';
$cities['Курганская область'][]='Шумиха';
$cities['Курганская область'][]='Куртамыш';


foreach ($cities as $my_key => $my_value){

	echo $my_key . ":<br/>";
	$sLangString = implode(', ', $my_value);
	echo($sLangString);
	echo ".<br/>";
	
}
// задание №4
function traslit_rulit($Eng_word)
{
	$rus_word='';
	$bukvi = ['а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g',
			'д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'j',
			'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
			'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh',
			'щ'=>'shh','ь'=>'`','ы'=>'y`','ъ'=>'``',
			'э' => 'e`','ю' => 'yu', 'я' => 'ya'];
	
	$dl=strlen($Eng_word);
	for ($i = 0; $i <= $dl; $i++)
	{
		$simvol = mb_substr($Eng_word, $i, 1, 'UTF-8');
		if (array_key_exists($simvol, $bukvi)){
			$rus_word=$rus_word . $bukvi[$simvol];
		} else {
			$rus_word=$rus_word . $simvol;

		}

	}
	return $rus_word;
}

echo traslit_rulit('яковлев алексей васильевич++++') . "<br/>";

// задание №5

function no_probel($in_word)
{
	$in_Words = explode(' ', $in_word);
	$out_word = implode('_', $in_Words);
	return $out_word;
}

echo no_probel(traslit_rulit('вава вавв мама цц ддддд***')) . "<br/>"; //почти девятое задание :))



// задание №6

function view_menu($menu) {
 	if(empty($menu)) {
			return;
	}
	echo '<ul>';
	foreach ($menu as $m_key => $m_value){
		echo '<li><a href="#">'.$m_key.'</a>';
 		view_menu($m_value);
		echo '</li>';
	}
	echo '</ul>';
 }
 

$me=['menu1'=>'', 'menu2'=>'', 'menu3'=>''];
$me['menu1']=['pmenu1'=>'', 'pmenu2'=>'', 'pmenu3'=>''];
$me['menu1']['pmenu1']=['ppmenu1'=>'', 'ppmenu2'=>'', 'ppmenu3'=>''];

view_menu($me);
// задание №7


function do_menya_ele_doshlo ($a, $b){
	if ($a>$b) {
		return false;
	}
	echo $a . '<br/>';
	return true;
}	
$n = 9;
for ($i = 0; do_menya_ele_doshlo ($i, $n); $i++){
}
// задание №8


function bkv_city($city,$bkv) {
	foreach ($city as $my_key => $my_value){
		echo $my_key . " - города, которые начинаются на букву $bkv:<br/>";
		$kopim=[];
		foreach ($my_value as $my_key_2 => $my_value_2) {
			if (mb_substr($my_value_2, 0, 1, 'UTF-8')==$bkv) {
				//echo $my_value_2 . ' ';
				$kopim[]=$my_value_2;
			} 
			
		}
	$sLangString = implode(', ', $kopim);
	echo($sLangString);
	echo "<br/>";
	}
}

bkv_city($cities,'Ш');



//задание №9

function zad_nine($in_word)
{
	return no_probel(traslit_rulit($in_word));
}

echo zad_nine('я сделал задание №9') . "<br/>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $tlt ?></title>
</head>
<body>
	<header>
		<div><h1><?= $hdr ?></h1>
		<?= view_menu($me); ?>

		</div>
	</header>
	<div class="footer">
		<p><?= 'Copyright ' . $god ?> </p>
	</div>
</body>
</html>
