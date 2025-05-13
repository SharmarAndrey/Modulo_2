<?php 
define("NOMBRE","Andrey");
$edad = 25;
function imprimirDatos(){
	global $edad;
	echo "Mi nombre es " . NOMBRE . " y tengo " . $edad . " años.";
}
imprimirDatos();
