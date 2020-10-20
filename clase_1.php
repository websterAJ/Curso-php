
<?php
/**
 * todo el los scripts de php van escrito dentro de la etiqueta
 	<?php ?>
 */
/**
 * Definicio de variables y constantes
 */

/*
 * todas las instrucciones de php terminan en ;
 */

// variable

$nombre_de_la_varible='valor'; // tipo string
$i= 1; // tipo number
$valido= TRUE; // tipo boolean
$O=0.5;
/**
 * todos los array comienza en 0 no en 1
 */
$my_array=['1','2',3]; // tipo array
$my_array2= array('1','2','3'); // tipo array

$ci_user=0.5;
$dni_user=0;
$dniUser=0;
$CiUser=0;
/**
 * Constantes
 * todas las constante se escriben en MAYUSCULA
 */
define('NOMBRE_DE_LA_CONSTANTE','valor');
const Host = 'localhost';

/**
 * Variables supra globales 
 */
// $_SERVER
// $_POST
// $_GET
// $_FILES
// $GLOBALS
// $_COOKIE
// $_ENV
// $_SESSION
// $_REQUEST
/**
 * Operaciones basicas php
 */
echo "esto es un salto de linea \n ";
echo "\t es un tabulador \n";
//imprimir o mostrar un valor
echo "Hola mundo!";
echo "<br>";
echo("Hola mundo!");
echo "<br>";
print "Hola mundo!";
echo "<br>";
print("Hola mundo!");
echo "<br>";
echo Host;
echo "<br>";
// imprimir array
var_dump($my_array);
echo "<br>";
echo $my_array[2];
echo "<br>";

/**
 * FUNCIONES BASICAS
 */
// print() // FUNCIONES PARA IMPRIMIR
// echo() // FUNCIONES PARA IMPRIMIR
// var_dump() // FUNCIONES PARA IMPRIMIR
// define() // DEFINICION DE CONSTANTE
// isset() // VERIFICAR SI UN VALOR EXSISTE Y SI ES NULL
// include() // INCLUIR ARCHIVO
// require() // REQUERIR ARCHIVO
// require_once() // REQUERIR ARCHIVO PRIMERO QUE
// mail() // FUNCION PARA ENVIAR CORREO
// strip_tags() // ELIMINA TODAS LAS ETIQUETAS HTML
// trim() // QUITA LOS ESPACIO AL INICIO Y AL FINAL DE UN TEXTO
// ceil() // REDONDEA UN VALOR NUMERICO
// count() // CUENTA LAS POSICIONES DE UN ARRAY
// header() // ENVIA ENCABEZADO EN FORMATO HTTP
// exit() // TERMINA LA EJECUCION DEL SCRIPT DE PHP
?>