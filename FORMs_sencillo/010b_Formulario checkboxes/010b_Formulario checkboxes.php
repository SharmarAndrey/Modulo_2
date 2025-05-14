<!DOCTYPE html>
<head lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Checkboxes</title>
</head>
<style>
	
	body{
		background-color: #09bbf7;
		color: #ffff00;
		margin: 0;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	
	}

	div{
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		min-height: 500px;
		max-width: 500px;
		display: flex;
		flex-direction: column;
		width: 30%;
		margin: 0 auto;
		text-align: center;	
		padding: 20px;
		

	}
	form{
		text-align: left;
	/* 	display: flex;
		flex-direction: column;
		width: 30%;
		margin: 0 auto; */
		
	}
	input{
		margin-bottom: 10px;
	}
	h1{
		text-align: center;
	}
	ul{
		list-style: none;
		padding: 0;
	}
	li{
		margin-bottom: 10px;
		text-shadow: red 1px 0 10px;
		font-size: large;
	}
	
.btn{
	background-color: #ffff00;;
	color: #09bbf7;
	padding: 10px 20px;
	border: none;
	cursor: pointer;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

	.btn:hover{
		background-color: #09bbf7;
		color: #ffff00;
	}
span{
	display: flex;
	justify-content: center;
}
	
.result{
	
	
}

p{
	text-align: center;
	color: red;
	font-family: verdana;
padding-top: 50px ;
text-shadow: #ffff00 1px 0 10px;

	
}

</style>
</head>


<div>

<h1>Formulario Checkboxes</h1>
<form action="" method="POST">

	<input type="checkbox" name="intereses[]" value="Musica">Musica <br>
	<input type="checkbox" name="intereses[]" value="Danza">Danza
	<br>
	<input type="checkbox" name="intereses[]" value="Deporte">Deporte
	<br>
	<span><input type="submit" value="Enviar" class="btn"></span>
	
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	if (isset($_POST["intereses"])) {
		
		echo "<h2>Tus intereses seleccionados son:</h2>";	
		echo "<ul>";
		foreach ($_POST["intereses"] as $interes) {
			echo "<li>$interes</li>";
		}
		echo "</ul>";
	}
else {
		echo "<p >No has seleccionado ningun interes</p>";
	}

} 
	?>
	</div>
</body>
</html>