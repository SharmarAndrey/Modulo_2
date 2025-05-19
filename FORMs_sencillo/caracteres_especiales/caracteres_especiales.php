<?php 
function validator($data){
	$data =  trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$nombre = validator($_POST["name"]);
$apellido = validator($_POST["apellido"]);
$textarea = validator($_POST["mensaje"]);
echo "$nombre <br> $apellido <br> $textarea";
