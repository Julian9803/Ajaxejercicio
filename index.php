<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Julian</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>

<form method="POST" >
	
<h2>Por Llene el Formulario</h2>
Por favor digite el nombre: <input type="text" name="name" required><br>
Por favor didgite el apellido <input type="text" name="apellido" required><br>
Por favor digite el grado <input type="text" name="grado" required><br>
Por favor escriba el valor base <input type="text" name="valor" required><br>
por Favor seleccione una Opcion <select name="primer" id="primero" required>
	<option>--- Seleccione una Opcion ---</option>
	<option value="Primero">Primero</option>
	<option value="Segundo">Segundo</option>

</select><br>
Por favor escoja el grupo<select name="segundo" id="segundo" required></select><br>

Por favor escoja el curso<select name="tercer" id="tercer" required></select><br>
<input type="submit">



</form>
<script >
	$("#primero").change(function(){

		var seleccion = $("#primero").val();
		$.ajax({
			method:"POST",
			url:"formularioAjax.php",
			data: {selec : seleccion}
		})
		.done(function( msg ){
			$("#segundo").html(msg)

		});


	});

	$("#segundo").change(function(){

		var sel= $("#segundo").val();
		$.ajax({

			method:"POST",
			url:"formularioAjax.php",
			data: {selecc : sel}
		})
		.done(function( msg ){
			$("#tercer").html(msg)

		});


	});



</script>

<?php 

	
	if(!empty($_POST['name'])){

		$nombre = $_POST['name'];
		$apellido = $_POST['apellido'];
		$grado = $_POST['grado'];
		$valor = $_POST['valor'];
		$primerOpcion = $_POST['primer'];
		$segundaOpcion = $_POST['segundo'];
		$tercerOpcion = $_POST['tercer'];

		if($primerOpcion == "Primero"){

			$valor += 35000;

		}

		if ($primerOpcion == "Segundo") {
			
			$valor += 70000;

		}



		if($tercerOpcion == "Danzas"){
			
			$porcentaje = ($valor * 20)/100;

		}elseif ($tercerOpcion == "Teatro") {
			
			$porcentaje = ($valor * 25)/100;

		}elseif ($tercerOpcion == "Musica") {

		
			$porcentaje = ($valor * 30)/100;

		}elseif ($tercerOpcion == "Dibujo") {
		
			$porcentaje = ($valor * 35)/100;

		}


		$total = $valor + $porcentaje;

		echo "El valor total a pagar es: ".$total;

	}
	


?>

</body>
</html>