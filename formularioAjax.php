<?php 



if(isset($_POST['selec'])){

	$entrar = 0;

	$opci = $_POST['selec'];
	$primer = array("A","B","C");
	$segun = array("A","C");

	$vector;
	$devolver = "";

	if($opci == "Primero"){

		$vector = $primer;
		$entrar = 1;

	}elseif ($opci == "Segundo") {
		
		$vector = $segun;
		$entrar = 2;

	}

	$devolver .= "<option>--- Seleccione ---</option>";

	if($entrar == 1){
	foreach ($vector as $item) {

		$devolver .= "<option value = 'Primer".$item."'>".$item."</option>";

	}	
	}

	if($entrar == 2){
		foreach ($vector as $item) {
			

			$devolver .= "<option value = 'Segundo".$item."'>".$item."</option>";

		}
	}

	echo $devolver;
	}


	if (!empty($_POST['selecc'])) {

		$selecciono = $_POST['selecc'];
		
		$primeroA = array("Danzas","Teatro","Dibujo");
		$primeroB = array("Danzas","Musica");
		$primeroC = array("Teatro","Dibujo","Musica");

		$segundoA = array("Teatro","Dibujo");
		$segundoC = array("Teatro", "Musica");

		$vector;
		$devolve = "";

		if($selecciono == "PrimerA"){

			$vector = $primeroA;

		}elseif ($selecciono == "PrimerB") {
			
			$vector = $primeroB;

		}elseif ($selecciono == "PrimerC") {
			
			$vector = $primeroC;

		}elseif ($selecciono == "SegundoA") {
			
			$vector = $segundoA;

		}elseif ($selecciono == "SegundoC") {
			
			$vector = $segundoC;

		}

		$devolve .= "<option>--- Seleccione ---</option>";

		foreach ($vector as $item) {
			
			$devolve .= "<option value= ".$item." >".$item."</option>";

		}

		echo $devolve;
	}


	
?>