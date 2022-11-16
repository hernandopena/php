<?php
//realizamos la conexion al servidor de db
$link = mysql_connect('localhost', 'userdb', 'abc532');
if (!$link) {
	die('No conectado : ' . mysql_error());
}

//una vez conectados, procedemos a seleccionar una db especifica
$db_selected = mysql_select_db('ccp2', $link);
if (!$db_selected) {
	die ('No se pudo conectar a la base de datos: ' . mysql_error());
}

//////////////////////////////////////////////////////////////////////

$query="select * from users";
$resultado = mysql_query($query, $link);
while ($fila = mysql_fetch_assoc($resultado)) {
	echo "los datos son: ".$fila['id'].", se actualizara a ".$fila['r1'];
}


mysql_close($link);

?>