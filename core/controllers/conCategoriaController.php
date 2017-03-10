<?php

		include(MODEL_DIR."class.Categoria.php");

		$db = new Conexion();
		$obj=new Categoria($db->getConection());


		if (isset($_POST["Buscar"])) {
			$cate=$_POST["nomcat"];
			$registros=$obj->consultarCategoria($cate);
		}else if (isset($_POST["BuscarTodo"])) {

			$registros=$obj->consultarTodo();
		}else {
			$registros = null;
		}

		if(isset($_POST["actualizar"])){
			$id=$_POST['cat2'];
			$nom=$_POST['nomcat2'];
			$obj->actualizarCategoria($id, $nom);
		}

		if(isset($_REQUEST["cambiar"])){
			$est=$_POST["dos"];
			$fac=$_POST["uno"];
			if ($est==0) {
				$obj->cambiarEstado($fac, 1);
			}else if($est==1){
				$obj->cambiarEstado($fac, 0);
			}

			echo $fac."-".$est;

		}

		function consultarCategoria($cate){

		  $registros=$obj->consultarCategoria($cate);
			return $registros;
		}

		function consultarTodo(){

			$registros=$obj->consultarTodo();
			return $registros;
		}

		function consultarTodoNombre(){

			$registros=$obj->consultarTodo();
			return $registros;
		}

  include_once(HTML_DIR."overall/Admin/header.php");
  include_once(HTML_DIR."overall/Admin/nav.php");
  include_once(HTML_DIR."overall/Admin/menus.php");
  include('html/index/consultarCategoria.php');
  include_once(HTML_DIR."overall/Admin/footer.php");
  include_once(HTML_DIR."overall/Admin/end.php");

 ?>
