Arrays
$temp [0]=22.5 ----->  22,5 es "posicion" 0
$temp [1]=17.5 ----->  17.5 es "posicion" 1
$temp [2]=30   ----->  30   es "posicion" 2
...
echo $temp[1] --> 17.5

count($temp)=3 // Cuenta los registros que tiene el vector

for (i=0;i< count($temp);i++)

$edades = array('a','b','c')



<?php
// Esto lo que hace es modificar lo sindices del array o nombres
  $registro['dni'] = "20456322";
  $registro['nombre'] = "Martinez Pablo";
  $registro['direccion'] = "Colon 134";
  echo $registro['nombre'];
?>
<?php
  // Otra manera es *****(LA BUENA)*****
  $registro = array('dni'=>'20456322',
                  'nombre'=>'Martinez Pablo',
                  'direccion'=>'Colon 134');
  echo $registro['dni'];
?>
<?php
// Para recorrerlo
  foreach($registro as $clave=>$valor) {
    echo "El array con indice $clave tiene el valor $valor";
  }
?>

###################################################################################

EJEMPLO 

  <?php
	$registros=array($_REQUEST['name1'] => $_REQUEST['edad1'],
			 $_REQUEST['name2'] => $_REQUEST['edad2'],
   			 $_REQUEST['name3'] => $_REQUEST['edad3']);				
	$mayor=0;
	$nombremayor="a";
		foreach ($registros as $nombre => $edad) {
				 if ($registros[$nombre] > $mayor){
					 $nombremayor = $nombre;
					 $mayor = $edad;
				 }
		};
?>



##FUCIONES##
	
<?php
// Una Funcion devuelve 1 o 0 valores

// No devuelve valor
function Nombrefuncion($parametro,$parametro2)
{
	echo "<h1>";
	echo $parametro;
	echo "</h1>";
}

nombrefuncion("Primer titulo")
echo "<br>"
nombrefuncion("Segundo Titulo")

?>

	
<?php
// Devuelve un valor
function promedio($valor1,$valor2)
{
	$pro=$valor1/$valor2;
	return $pro; // UNa vez hace return no sigue con la Funcion
}

$v1=10;
$v2=20;
$p=promedio($v1,$v2);
echo "el promedio es ".$p;


?>

##RESULTADO MISMA PAGINA##
DEJAR EL ACTION DEL form VACIO
DAR NAME AL BOTON SUBMIT
PONER SIEMPRE
	<script> //Previene el post Resubmit al refrescar el navegador
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
/*Para una solución más completa y valida tambien para get hay que utilizar el patrón de diseño
Post/Redirect/Get (https://es.wikipedia.org/wiki/Post/Redirect/Get) */
</script>
	
if(isset($_REQUEST['boton'])){
		echo $_REQUEST['Nombre'];
		echo $_REQUEST['edad']." Años";
		}


	
