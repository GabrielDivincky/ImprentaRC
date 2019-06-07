<?php 


			$empresa = $_POST['empresa'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $producto = $_POST['producto'];



			$emaildestino = "gabdiv33@gmail.com";
			$asunto = "Nueva Consulta";
			$mensajemail="Empresa: ".$_POST['empresa']."<br>Nombre: ".$_POST['nombre']."<br>Apellido: ".$_POST['apellido']."<br>Telefono: ".$_POST['telefono']."<br>Producto: ".$_POST['producto']."<br>Consulta: ".$_POST['consulta'];

			//Cabeceras
			// Para enviar un correo con formato HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			// Cabeceras adicionales
			$cabeceras .= 'From: '.$_POST["nombre"].' <'.$_POST["email"].'>' . "\r\n";

			//enviando...
			//la funcion mail() devuelve true o false
			$envio=mail($emaildestino,$asunto,$mensajemail,$cabeceras);


			if($envio == true){
				echo "<p class='saludo'>Gracias ".$_POST['nombre']." por registrarse</p>";
			}else{
				echo "hubo un error en el envio. <br> Vuelva a intentarlo";
			}
	




				



				?>