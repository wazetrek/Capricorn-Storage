$(document).ready(function(){
  //Iniciar sesión
  $('#iniciarsesion1').click(function() {
    $("#header").load("html/overall/Principal/login.php");
  });
  $('#contra').click(function(){
    $('#recup').load("html/overall/Principal/recuperar.php");
  });
});
