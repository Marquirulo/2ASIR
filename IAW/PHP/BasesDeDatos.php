3 pasos
1.Apertura de la conexion y seleccion de la BBDD
$conexionPHP=mysqli_connect (maquina,usuario,contaseña,nombre basedatos)
2.Operaciones en BBDD
mysql_query($conexionPHP, consulta).mysqli_error($conexionPHP)
3.CERRAR conexion
mysqli_Close($conexionPHP)















