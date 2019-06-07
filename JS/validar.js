function validar(){
	var nombre, apellido, telefono, email, expresion;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	telefono = document.getElementById("telefono").value;
	email = document.getElementById("email").value;
	consulta = document.getElementById("consulta").value;

if(nombre === "" || apellido === "" || telefono === "" || email === "" || consulta === ""){
	alert("Todos los campos son obligatorios");
	return false;
}
}
