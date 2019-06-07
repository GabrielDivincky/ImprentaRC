<?php 

if(isset($_POST['submit'])){
	if(empty($nombre)){
		echo "<p class='error'>* Agrega tu nombre </p>";
	}else{
		if(strlen($nombre) > 15){
		echo "<p class='error'>* El nombre es muy largo</p>";

		}
	}
	if(empty($telefono)){
		echo "<p class='error'>* Agrega tu telefono </p>";
	}else{
		if(!is_numeric($telefono)){
		echo "<p class='error'>* El telefono no es valido</p>";

		}

	}
	if(empty($email)){
		echo "<p class='error'>* Agrega tu correo </p>";
	}else {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<p class='error'>* El correo es incorrecto </p>";	
		}
	}

	}

?>