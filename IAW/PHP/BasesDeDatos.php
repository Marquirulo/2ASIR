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

EJEMPLO DURO

	<form method="post" action="">
		Inserta Codigo de Animal:
		<input type="text" name="codigo"> <br>
		Inserta Peso de Animal:
		<input type="text" name="peso">	<br>
		Selecciona el Tipo de animal:
		<select name="tipo">
			<option value="carnivoro">carnivoro
			<option value="hervivoro">hervivoro
			<option value="omnivoro">omnivoro
		</select>
		<input type="submit" value="enviar" name="boton">
	</form>
	
	<?php
	if(isset($_REQUEST['boton'])){
		echo "BOTONAZO";
		$codigo=$_REQUEST['codigo'];
		$peso=$_REQUEST['peso'];
		$tipo=$_REQUEST['tipo'];
		$conexion=mysqli_connect("localhost","root","","animales") or die ("Hay problemas con la conexion");
		$sql=mysqli_query($conexion,"insert into animal(codigo,tipo,peso) values ('$codigo',$peso,'$tipo')").mysqli_error($conexion);
		mysqli_close($conexion);
		
	}
?>

 ### CURSORES ###
		 <?php
		$registros=msqli_query($conexion "select codigo,mail... from TablaX)
		
		if ($registros // $registros != false) {
			$reg=mysqli_fetch_array($registros);
		
			while ($reg != false){
		
				$reg=mysqli_fetch_array($registros);
		
			}
		
		} else {
		
			echo mysqli_error($conexion)
		
		}
		
		?>



##COOKIES###

<?php
	setcookie (nombre,valor,fecha expiracion[time()(en segundos),);
?>

EJEMP;

setcookie("color","ff0000",time() +60*60*24*365, "/" )

$_COOKIE['nombrecookie']

<html>
<body>

<form method="post" action="20.php">
	<input type="radio" name="borde" value="10">1
	<input type="radio" name="borde" value="20">2
	<input type="radio" name="borde" value="30">3
	<input type="submit" value="cokey" name="boton">
</form>
#######################20_1.php################################
<table border=<?php
	if(isset($_COOKIE['galleta'])){
		echo $_COOKIE['galleta'];
	}
		?>
>

	<tr>
		<td>2
		<td>4
	</tr>
	<tr>
		<td>3
		<td>1
	</tr>
</table>

</body>
</html>
###################################20.php############################
<html>
<body>
<?php
	setcookie("galleta",$_REQUEST['borde'],time()+30,"/");
?>
	<a href="20_1.php">VOLVE
</body>
</html>

