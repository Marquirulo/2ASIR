3 pasos
<?php
//1.Apertura de la conexion y seleccion de la BBDD
$conexionPHP=mysqli_connect (maquina,usuario,contraseña,nombre basedatos)

//2.Operaciones en BBDD

$sql="insert into alumnos(nombre,mail,codigoclase) values ('$_REQUEST[nombre]',...)"  
  
mysql_query($conexionPHP, $sql).mysqli_error($conexionPHP)



//Se ponen los values entre comillas para que al insertar lo inserte como VARCHAR como en oracle / si no es texto no va entre comillas

//3.CERRAR conexion
mysqli_Close($conexionPHP)

// MYSQL TIENE QUE ESTAR EJECUTANDOSE EN XAMP
?>

localhost/phpmyadmin 

Creo la base de datos y añado la tabla como en oracle

Create table alumnos (  nombre VARCHAR(20),
                        mail   VARCHAR(20),
                        CodigoCurso DECIMAL(10,2)
)













