	<script>

		function validacionUno(){
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

function validacionDos(){
	var usu=document.getElementById("usu").value;
	var pw1=document.getElementById("pw1").value;
	var contra2=document.getElementById("contra2").value;
	var espacios = false;
	var cont = 0;


	if (usu=="") {
		window.alert("Ingrese el usuario, por favor.");
		return false;
	}
	if (pw1=="" ) {
		window.alert("Ingrese la contraseña para continuar.");
		return false;
	}

	while (!espacios && (cont < pw1.length)) {
 		if (pw1.charAt(cont) == " ")
    	espacios = true;
		cont++;
	}
 	if (espacios) {
  		window.alert ("La contraseña no puede contener espacios en blanco");
  		return false;
	}

	if(pw1.length < 6){
      alert("La clave debe tener al menos 6 caracteres");
      return false;
   	}
   	if(pw1.length > 16){
      window.alert("La clave no puede tener más de 16 caracteres");
      return false;
   	}

   	if (!pw1.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/)){
      window.alert("La clave debe tener al menos una letra en minúscula, una letra en mayúscula, un número y un caracter especial.");
      return false;
   	}

   	if (contra2="") {
   		window.alert("Ingrese la confirmación de la contraseña.");
   		return false;
   	}
   return true;
}


	</script>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<style media="screen">

	*,:after,:before{box-sizing:border-box}
	.clearfix:after,.clearfix:before{content:'';display:table}
	.clearfix:after{clear:both;display:block}
	a{color:inherit;text-decoration:none}

	.login-wrap{
	    width:100%;
	    margin:auto;
	    max-width:525px;
	    min-height:670px;
	    position:relative;
	    box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
	}
	.login-html{
	    width:100%;
	    height:100%;
	    position:absolute;
	    padding:90px 70px 50px 70px;
	    background:rgba(0,0,0,.8);
	}

	.recup{
	    width:100%;
	    height:100%;
	    position:absolute;
	    padding:90px 70px 50px 70px;
	    background:rgba(0,0,0,.8);
	}

	.lindo{
	    text-transform: uppercase;
	    color: white;
	    font-size: 1.5em;
	}

	.enca{
	    color: white;
	    font-size: 4em;
	    text-shadow: 6px 6px #214F74;
	    font-family: 'KodchiangUPC';
	    margin-bottom: -.8em;
	    margin-top: -.8em;
	}

	#mittle{
	    color: #497C84;
	    font-size: 7em;
	    text-shadow: 6px 5px #B2BEC0;
	    font-family: 'KodchiangUPC';
	    margin-left: 30px;
	    margin-right: 30px;
	}

	.enca, #mittle{
	    display: inline-block;
	}

	.op{
	    padding: 8px;
	    border-radius: 6px;
	    margin: 10px;
	    font:600 16px/18px 'Open Sans',sans-serif;
	}

	.login-html .sign-in-htm,
	.login-html .sign-up-htm{
	    top:0;
	    left:0;
	    right:0;
	    bottom:0;
	    position:absolute;
	    -webkit-transform:rotateY(180deg);
	            transform:rotateY(180deg);
	    -webkit-backface-visibility:hidden;
	            backface-visibility:hidden;
	    -webkit-transition:all .4s linear;
	    transition:all .4s linear;
	}
	.login-html .sign-in,
	.login-html .sign-up,
	.login-form .group .check{
	    display:none;
	}
	.login-html .tab,
	.login-form .group .label,
	.login-form .group .button{
	    text-transform:uppercase;
	}
	.login-html .tab{
	    font-size:22px;
	    margin-right:15px;
	    padding-bottom:5px;
	    margin:0 15px 10px 0;
	    display:inline-block;
	    border-bottom:2px solid transparent;
	}
	.login-html .sign-in:checked + .tab,
	.login-html .sign-up:checked + .tab{
	    color:#fff;
	    border-color:#1161ee;
	}
	.login-form{
	    min-height:345px;
	    position:relative;
	    -webkit-perspective:1000px;
	            perspective:1000px;
	    -webkit-transform-style:preserve-3d;
	            transform-style:preserve-3d;
	}
	.login-form .group{
	    margin-bottom:15px;
	}

	#sesion:hover{
	    background:rgba(142,0,100,.5);
	    transition: 1s;
	}

	#regis:hover{
	    background:rgba(142,0,100,.5);
	    transition: 1s;
	}

	.login-form .group .label,
	.login-form .group .input,
	.login-form .group .button{
	    width:100%;
	    color:#fff;
	    display:block;
	}
	.login-form .group .input,
	.login-form .group .button{
	    border:none;
	    padding:15px 20px;
	    border-radius:25px;
	    background:rgba(255,255,255,.1);
	}
	.login-form .group input[data-type="password"]{
	    text-security:circle;
	    -webkit-text-security:circle;
	}
	.login-form .group .label{
	    color:#aaa;
	    font-size:12px;
	}
	.login-form .group .button{
	    background:#1161ee;
	}
	.login-form .group label .icon{
	    width:15px;
	    height:15px;
	    border-radius:2px;
	    position:relative;
	    display:inline-block;
	    background:rgba(255,255,255,.1);
	}
	.login-form .group label .icon:before,
	.login-form .group label .icon:after{
	    content:'';
	    width:10px;
	    height:2px;
	    background:#fff;
	    position:absolute;
	    -webkit-transition:all .2s ease-in-out 0s;
	    transition:all .2s ease-in-out 0s;
	}
	.login-form .group label .icon:before{
	    left:3px;
	    width:5px;
	    bottom:6px;
	    -webkit-transform:scale(0) rotate(0);
	            transform:scale(0) rotate(0);
	}
	.login-form .group label .icon:after{
	    top:6px;
	    right:0;
	    -webkit-transform:scale(0) rotate(0);
	            transform:scale(0) rotate(0);
	}
	.login-form .group .check:checked + label{
	    color:#fff;
	}
	.login-form .group .check:checked + label .icon{
	    background:#1161ee;
	}
	.login-form .group .check:checked + label .icon:before{
	    -webkit-transform:scale(1) rotate(45deg);
	            transform:scale(1) rotate(45deg);
	}
	.login-form .group .check:checked + label .icon:after{
	    -webkit-transform:scale(1) rotate(-45deg);
	            transform:scale(1) rotate(-45deg);
	}
	.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	    -webkit-transform:rotate(0);
	            transform:rotate(0);
	}
	.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	    -webkit-transform:rotate(0);
	            transform:rotate(0);
	}

	.hr{
	    height:2px;
	    margin:60px 0 50px 0;
	    background:rgba(255,255,255,.2);
	}
	.foot-lnk{
	    text-align:center;
	}
	</style>
</head>
<body>
		<center><header class="enca"><a href="login.php">CAPRICORN</header><p id="mittle">CS</p><header class="enca">STORAGE</a></header></center>

		<?php

		include_once(HTML_DIR."overall/Principal/login.php");

		 ?>

	<?php

	 	function validar_clave($clave,&$error_clave){
    if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!text.match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!text.match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!text.match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}


if ($_POST){
   $error_encontrado="";
   if (validar_clave($_POST["contra1"], $error_encontrado)){
      echo "<script languaje='javascript'> alert('PASSWORD VÁLIDO')</script>";
   }else{
      echo "<script languaje='javascript'> alert('PASSWORD NO VÁLIDO: " . $error_encontrado.")</script>";
   }
}

	 ?>

</body>
</html>
