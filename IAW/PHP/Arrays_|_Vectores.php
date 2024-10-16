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








