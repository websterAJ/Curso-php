<?php

// funciones personalizadas

function suma($a,$b)
{
	$c = $a+$b;
	return $c;
}
// funciones de consulta a base de datos

$conn = null;

function conectar($host,$user,$pass,$db)
{
	global $conn;

	$conn = mysqli_connect($host,$user,$pass,$db);

	if (mysqli_connect_errno()) {
	    printf("Conexión fallida: %s\n", mysqli_connect_error());
	    exit();
	}
	return $conn;
}

/**
 * Metodo SelectAll
 *
 * Metodo encargado de realizar una consulta general a una tabla de la base de datos
 * especificando la tabla a consultar al igual que las columnas a retornar 
 *
 * Parametros que recibe el metodo
 *
 *	$attr   String
 *	$table  String
 *  Return array
 */
function SelectAll($attr,$table){
	global $conn;
	$data = null;

	$db = mysqli_query($conn,"SELECT $attr FROM $table ;");
	if (!$db) {
		$data = mysqli_error($conn);
	}else{
		$data = mysqli_fetch_all($db,MYSQLI_ASSOC);
	}

	return $data;
	
}

/**
 * Metodo SelectWhere
 *
 * Metodo encargado de realizar una consulta mas especifica a una tabla 
 * de la base de datos
 *
 * Especificando la tabla a consultar al igual que las columnas a retornar 
 * segun cumpla una condicion especificada
 *
 *
 * Parametros que recibe el metodo
 *
 *	$attr   String
 *	$table  String
 *	$where  String
 *  Return array
 */
function SelectWhere($attr,$table,$where){
	global $conn;
	$data = null;
	$db = mysqli_query($conn,"SELECT $attr FROM $table WHERE $where;");
	if (!$db) {
		$data = mysqli_error($conn);
	}else{
		$data = mysqli_fetch_all($db,MYSQLI_ASSOC);
	}
	

	return $data;
	
}

/**
 * Metodo Delete
 *
 * Metodo encargado de eliminar datos en la tablas de la base de datos
 *
 *
 * Parametros que recibe el metodo
 *
 *	$where   String
 *	$table  String
 *  Return void
 */
function Delete($where,$table){
	global $conn;
	
	$db = mysqli_query($conn,"DELETE FROM $table WHERE $where;");
	if (!$db) {
		$db = mysqli_error($conn);
	}
	return $db;

	
}

/**
 * Metodo Update
 *
 * Metodo encargado de eliminar datos en la tablas de la base de datos
 *
 *
 * Parametros que recibe el metodo
 *
 *	$table   String
 *	$columnas  String
 *	$where  String
 *  Return void
 */
function Update($table,$columnas,$where){
	global $conn;
	$valores ="";
    foreach ($columnas as $key => $value) {

      $valores .="`$key`='".$value."',";
    }      	
	$valores = substr($valores,0,strlen($valores)-1);
	$db = mysqli_query($conn,"UPDATE `$table` SET $valores WHERE $where;");
	if (!$db) {
		$data = mysqli_error($conn);
	}

	return $db;
	
}

/**
 * Metodo Insert
 *
 * Metodo encargado de insertar datos en tablas especificada y en las columnas
 * indicadas
 *
 * Parametros que recibe el metodo
 *
 *	$table   String
 *	$columns  String
 *	$where  String
 *  Return void
 */
function Insert($table,$columns){
	global $conn;
	$columnas=null;
  	$datos=null;
   
	foreach ($columns as $key => $value) {
        $columnas.=$key.",";
        if($value == 'NULL'){
        	$datos.=$value.',';
        }else{
        	$datos.='"'.$value.'",';
        }
        
	}
	$columnas = substr($columnas, 0, -1);
	$datos = substr($datos, 0, -1);
	$db = mysqli_query($conn,"INSERT INTO $table ($columnas) VALUES ($datos)");
	if (!$db) {
		$db = mysqli_error($conn);
	}
	return $db;
	
}

conectar('localhost','root','23124156','escolar');

$data= SelectAll("*","grados");
//echo "<pre>";
//var_dump($data);
/*for ($i=0; $i < count($data); $i++) { 
	echo $data[$i]['grado']."<br>";
}*/
foreach ($data as $key => $value) {
?>
	<table width="100%" border="1">
		<tr>
			<td><?= $value['grado']?></td>
			<td><?= $value['statud']?></td>
			<td><button type="button" value="<?= $value['id']?>" onclick="my_funcion(this)">Click</button></td>
		</tr>
	</table>
	
<?php
}
?>
<script>
	function my_funcion(a) {
		alert(a.value);
	}
</script>
