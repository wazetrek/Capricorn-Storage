function validarCamposProducto(){
  var nombre=document.getElementById("nombreproducto").value;
  var precio=document.getElementById("precioproducto").value;
  var categoria=document.getElementById("categoria").value;
  var imagen=document.getElementById("imagen").value;
  if (nombre=="") {
    window.alert("Ingrese el nombre, por favor.");
    return false;
  }
  if (precio=="") {
    window.alert("Ingrese el precio, por favor");
    return false;
  }
  if (categoria=="") {
    window.alert("Elija una categoría, por favor");
    return false;
  }
  if (imagen=="") {
    window.alert("Elija la imagen, por favor");
    return false;
  }

}

function validarCamposCategoria(){
  var nom=document.getElementById("nombrecatego").value;
  if (nom=="") {
    window.alert("Ingrese el nombre de la categoría.");
      return false;
  }
}

function validarCamposBuscarCategoria(){
  var busqueda=document.getElementById("nomcat").value;
    if (busqueda==""){
      window.alert("ingrese por lo que quiere buscar");
      return false;
    }
}

function validarCamposBuscarProductos(){
 var bus=document.getElementById("buscar").value;
 if(bus==""){
   window.alert("ingrese por lo que quiere buscar");
   return false;
 }

}

function validarCamposModalProducto(){
  var valicat=document.getElementById("cat2").value;
  var valinom=document.getElementById("nombreProducto").value;
  var valipre=document.getElementById("precio").value;
  var valinomcat=document.getElementById("nomcat").value;
  var valima=document.getElementById("imagen").value;

  if(valicat==""){
    window.alert("el campo id esta vacio");
    return false;
  }
  if(valinom==""){
    window.alert("el campo nombre esta vacio");
    return false;
  }
  if(valipre==""){
    window.alert("el campo precio esta vacio");
    return false;
  }
  if(valinomcat==""){
    window.alert("el campo categoria esta vacio");
    return false;
  }
  if(valima==""){
    window.alert("el campo imagen esta vacio");
    return false;
  }
}


function validarCamposModalCategoria(){
 var nomcatego=document.getElementById("nomcat2").value;
<<<<<<< HEAD

    if(nomcatego==""){
      window.alert("el campo nombre esta vacio");
      return false;
  }
}

/*
	  $(document).ready(function() {
	    $("#nombreproducto").keyup(campoProducto);
	  });

	  function campoProducto() {
	    var producto = document.getElementById('nombreproducto').value;
	    var tamañoProducto = producto.length;
	    if (tamañoProducto<4) {
	      document.getElementById("nombreproductovalido").innerHTML="<i class='fa fa-close'></i> Nombre de producto por lo menos de 4 caracteres <input id='producnamechecker' type='hidden' value='0' name='producnamechecker'> ";
	    }
	  }
*/
=======
    if(nomcatego==""){
      window.alert("el campo nombre esta vacio");
      return false;

  }
}
>>>>>>> origin/master
