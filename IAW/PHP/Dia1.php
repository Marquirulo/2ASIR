/* 
  Para capar signos internos \
  Los datos entre '' o "" son variables
  La diferencia ente "" -> Interpreta las variables y '' -> No interpreta las variables
*/
// Comandos y funciones
<?php 
  echo "<a href='https://www.hola.com/'><b>Hola Mundo</b></a>"; // Incluye cadena HTML en el documento
  date_default_timezone_set('Europe/Madrid'); // Ajusta la zona horaria por defecto
  $dia=date("d|m|y"); // Saca el dia|mes|año actual;
  rand(n1,n2); // Si solo pones un número te da aleatorios del 0 al número
?>

// Estructuras lógicas
<?php
  if (condicion) {
    ejecucion;
  } else {
    ejecucion;
  }
?>

//Strings
<?php
  $nom = 'Marcos';
  $ape = "Berrocal";
//Concatenación
  echo "$nombre$ape"; //MarcosBerrocal
  echo '$nombre$ape'; //$nombre$ape
  echo "$nombre $ape"; //Marcos Berrocal
  echo "$nombre.$ape";//MarcosBerrocal (El . concatena)
  echo $nombre.' '.$ape; //Marcos Berrocal
  echo "Hola".(1*2)."<br>" //Hola2

?>

//Bucle For
<?php
//for($f=1;$f<=100;$f++)
//primero declara variable
//Luego condicion
//Y luego "Consecuencia"

for($f=1; $f<=100; $f++){
  echo $f;
  echo "<br>";
}
?>

//Bucle While

<?php
$valor=100;
$inicio=1;
while ($incio<=$valor){
  echo $inicio;
  echo "<br>";
  $incio++;
}
?>
//Forms
html:
#Importante
<form method="post" action="form2.php">
  
		<h3>Ingrese peso: <h3> 
		<input type="text" name="peso">
		<h3>Ingrese altura: <h3> 
		<input type="text" name="altura">
		<input type="submit" value="enviar">
	</form>
form2.php:
<?php
		echo "IMC:".($_REQUEST['peso']/pow($_REQUEST['altura'],2));

		
		if ($_REQUEST['altura'] > 1.80) {
			echo "Eres alto ";
		} else {
			echo "Eres bajo ";
		}
?>;

Para el boton radio $_REQUEST['radio1']=="resta" /// $_REQUEST['radio1']=="suma"
      
Para las checkbox if (isset($_REQUEST['check1'])) /
Para las checkbox if (isset($_REQUEST['check1']==true))
			
Para las checkbox if (!isset($_REQUEST['check1'])) La exclamacion es para marcar el no marcado //
Para las checkbox if (!isset($_REQUEST['check1']==FALSE))

Para sacar del select 
select name="operacion"
	option value=suma
	option value=resta
php : $_REQUEST['operacion']=="resta" /// $_REQUEST['operacion']=="suma"







