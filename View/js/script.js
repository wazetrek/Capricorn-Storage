function validacionUno() {
  var usuario=document.getElementById("usuario").value;
	var contra1=document.getElementById("contra1").value;

	if (usuario=="") {
		window.alert("Ingrese el usuario, por favor.");
		return false;
	}
	if (contra1=="") {
		window.alert("Ingrese la contraseña para continuar.");
		return false;
	}

}
