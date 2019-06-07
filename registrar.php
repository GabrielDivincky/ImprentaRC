<?php 

include 'conexion.php';

// Recibir los datos y almacenar en las variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

// Consultar para insertar
$insertar = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Email, Consulta) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$consulta')"; 


$verificar_telefono = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE Telefono = '$telefono'");
if (mysqli_num_rows($verificar_telefono) > 0){
	echo '<script>alert("El telefono ya esta registrado");
		window.history.go(-1);
		</script>';
	exit;
}
else{	


$verificar_correo = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE Email = '$email'");
if (mysqli_num_rows($verificar_correo) > 0){
	echo '<script>alert("El correo ya esta registrado");
		window.history.go(-1);
		</script>';
	exit;
}

// Ejecutar consulta

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo "Error al registrarse";
}else { 



echo '<script>alert("Gracias '. $nombre .' por su consulta. A la brevedad le responderemos.");
		window.history.go(-1);
		</script>';
	exit;
}
}



// Cerrar conexión
mysqli_close($conexion);

 

