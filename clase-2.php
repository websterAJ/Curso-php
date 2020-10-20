<?php

// Condicionales y ciclos
$user = (isset($_GET['user'])) ? $_GET['user'] : NULL ;

if($user == 'admin'){
	echo "usted es administrador"."</br>";
}else{
	echo "usted no es administrador"."</br>";
}

if ($user == 'admin') {
	echo "usted es administrador"."</br>";
}elseif(empty($user)){
	echo "usted no es administrador"."</br>";
}else{
	echo "usted no a indicado ningun usuario"."</br>";
}

switch ($user) {
	case 'admin':
		echo "usted es administrador"."</br>";
		break;
	case 'Null':
		echo "usted no es administrador"."</br>";
		break;
	
	default:
		echo "usted no a indicado ningun usuario"."</br>";
		break;
}
$array = array(1,2,3,4,5,6,7,8,9,10);
for ($i=0; $i < count($array); $i++) { 
	echo $array[$i]."</br>";
}
echo "<hr>";
$i=0;
do{
	echo $array[$i]."</br>";
	$i++;
}while (count($array) <= $i);
echo "<hr>";
$i=0;
while (count($array) <= $i) {
	echo $array[$i]."</br>";
	$i++;
}
echo "<hr>";
foreach ($array as $value) {
	echo $value."</br>";
}

?>