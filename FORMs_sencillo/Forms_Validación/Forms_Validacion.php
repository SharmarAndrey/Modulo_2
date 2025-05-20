
	<?php

    $nombre = $email = $url =  $comentario = "";
	$nombreErr = $emailErr = $urlErr =  $comentarioErr = "";
	$cursos = [];
	$cursosDisponibles = ["HTML", "CSS", "JS"];
	$cursosErr = "";

	function validator($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    if (empty($_POST["nombre"])) {
	        $nombreErr = "El nombre es requerido";
	    } else {
	        $nombre = validator($_POST["nombre"]);
	    }

	    if (empty($_POST["email"])) {
	        $emailErr = "El email es requerido";
	    } else {
	        $email = validator($_POST["email"]);
	        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	            $emailErr = "El email no es valido";
	        }
	    }

	    if (empty($_POST["url"])) {
	        $urlErr = "La URL es requerida";
	    } else {
	        $url = validator($_POST["url"]);
	        if (!filter_var($url, FILTER_VALIDATE_URL)) {
	            $urlErr = "La URL no es valida";
	        }
	    }

	    if (empty($_POST["comentario"])) {
	        $comentarioErr = "El comentario es requerido";
	    } else {
	        $comentario = validator($_POST["comentario"]);
	    }

	    if (empty($_POST["cursos"])) {
	        $cursosErr = "Debe seleccionar al menos un curso.";
	    } else {
	        foreach ($_POST["cursos"] as $cursoSeleccionado) {
	            if (in_array($cursoSeleccionado, $cursosDisponibles)) {
	                $cursos[] = $cursoSeleccionado;
	            }
	        }
	    }
	}




	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forms VaLidacion</title>
	<style>
        .error { color: red; }
        label { display: block; margin-top: 10px; }
    </style>
</head>
<body>
	
<h2>Formulario de participantes</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Nombre:
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <span class="error">* <?php echo $nombreErr; ?></span>
    </label>

    <label>Email:
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
    </label>

    <label>URL:
        <input type="text" name="url" value="<?php echo $url; ?>">
        <span class="error">* <?php echo $urlErr; ?></span>
    </label>

    <label>Comentario:
        <textarea name="comentario" rows="5" cols="40"><?php echo $comentario; ?></textarea>
        <span class="error">* <?php echo $comentarioErr; ?></span>
    </label>

    <label>Cursos de ty interes:</label>
    <?php foreach ($cursosDisponibles as $curso): ?>
        <label style="display:inline-block; margin-right: 10px;">
            <input type="checkbox" name="cursos[]" value="<?php echo $curso; ?>"
                <?php if (in_array($curso, $cursos)) {
                    echo "checked";
                } ?>>
            <?php echo $curso; ?>
        </label>
    <?php endforeach; ?>
    <br>
    <span class="error">* <?php echo $cursosErr; ?></span>

    <br><br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nombreErr && !$emailErr && !$urlErr && !$comentarioErr && !$cursosErr) {
    echo "<h3>Datos enviados correctamente:</h3>";
    echo "Nombre: $nombre<br>";
    echo "Email: $email<br>";
    echo "URL: $url<br>";
    echo "Comentario: $comentario<br>";
    echo "Cursos seleccionados: " . implode(", ", $cursos);
}
	?>
</body>
</html>