<?php
//establecemos estilo para el body y para lista numerada(para centrar contenido)
echo "<style>
    body { text-align: center; }
    ol {
        display: inline-block;
        text-align: left;
        padding-left: 20px;
    }
</style>";


/* 1.- Crear un array llamado $estudiantes con al menos 5 estudiantes con diferentes nombres, edades y notas. */

//creamos el array de estudiantes
$estudiantes = [

    ["nombre" => "Ana", "edad" => 20, "nota" => 6.5],

    ["nombre" => "Luis", "edad" => 22, "nota" => 4.8],

    ["nombre" => "María", "edad" => 19, "nota" => 7.2],

    ["nombre" => "Pedro", "edad" => 21, "nota" => 5.0],

    ["nombre" => "Lucía", "edad" => 20, "nota" => 3.9],

];


/* 2.- Mostrar la lista completa de estudiantes con sus datos.  */
//
echo "<h2>Lista de estudiantes : </h2>";
//recorremos el array de estudiantes
foreach ($estudiantes as $estudiante){
//montramos los estudiantes por pantalla
echo "Nombre :<b>  $estudiante[nombre]</b>, Edad :<b> $estudiante[edad]</b>, Nota :<b> $estudiante[nota]</b><br>";

}

/* 3.- Mostrar los nombres de los estudiantes que han aprobado, considerando aprobado si nota ≥ 5. */


//creamos variable para considerar aprobado
$considerandoAprobado  = "5.0";
//creamos array vacio para guardar estudiantes aprobados
$aprobados = [];

//recorremos el array de estudiantes
foreach ($estudiantes as $estudiante){
//comparamos las notas de los estudiantes con la variable considerandoAprobado
if($estudiante["nota"]>=$considerandoAprobado ){
//si la nota es mayor o igual que la variable considerandoAprobado, guardamos el estudiante en el array aprobados
	$aprobados[] = $estudiante;
}
}
//comprobamos si el array aprobados no esta vacio
if(!empty($aprobados)){
echo "<h2>Estudiantes aprobados : </h2>";
//creamos lista numerada de estudiantes aprobados
echo "<ol>";
//recorremos el array de estudiantes aprobados
foreach ($aprobados as $estudiante){
//mostramos los estudiantes aprobados por pantalla
echo "<li><b>$estudiante[nombre]</b>, con nota <b> $estudiante[nota]</b></li>"; //echo "<li>$estudiante[nombre], con nota <b> $estudiante[nota]</b></li>";
	
}
//cerramos lista
echo "</ol>";
}

/* 4.- Pon los comentarios en el código con tus propias palabras. */

/* 5.- Opcional:
¿Te atreves a hacer el script para mostrar la nota más alta y la más baja? */


//creamos variable para guardar nota mas alta
$notaMasAlta = "";
//recorremos el array de estudiantes
foreach($estudiantes as $estudiante){ 
//comparamos las notas de los estudiantes con la variable notaMasAlta
	if($estudiante["nota"]> $notaMasAlta){
//si la nota es mayor que la variable notaMasAlta, actualizamos la variable notaMasAlta
		$notaMasAlta = $estudiante["nota"];

	}
}
//mostramos por pantalla la nota mas alta
	echo "<h2>Nota mas alta es :</h2><b> $notaMasAlta<b/><br>";