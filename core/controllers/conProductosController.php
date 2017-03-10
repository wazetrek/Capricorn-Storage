<?php


    include(MODEL_DIR."class.Productos.php");
    $db = new Conexion();
    $obj=new Producto ($db->getConection());


/*$nom=$_POST["nombreProducto"];
	$cate=$_POST["categoria"];
    $esta=$_POST["estado"];
	$registros=$obj->consultarProducto($cate);*/

if (isset($_POST["Buscar"])) {

	if ($_POST["filtro"] == 1) {

		$obj->__SET("categoria", $_POST["buscar"]);
		$registros=$obj->consultarCategoria();

	}elseif ($_POST["filtro"] == 0) {

		$obj->__SET("nombre", $_POST["buscar"]);
		$registros=$obj->consultarNombre();

	}elseif ($_POST["filtro"] == 2) {

		$obj->__SET("estado", $_POST["buscar"]);
		$registros=$obj->consultarEstado();

	}

}else if (isset($_POST["BuscarTodo"])) {

	$registros=$obj->consultarTodo();
}else {
	$registros = null;
}


if(isset($_POST['Actualizar'])){


	$obj->__SET("idProducto", $_POST["cat2"]);
	$obj->__SET("nombre", $_POST["nombreProducto"]);
	$obj->__SET("precio", $_POST["precio"]);
	$obj->__SET("categoria", $_POST["nomcat"]);
	if (! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0) { // no existe la imagen? || hay errores?
		echo "ME CAES MAL";
	}else{
	$img = $_FILES["imagen"]["name"]; //nombre original de la imagen

	$parte = explode(".", $img); // exllode para partir el nombre de la imagen y la extencion
	$ruta = $_FILES["imagen"] ["tmp_name"]; // lugar de donde viene el archivo origen de la imagen
	$destinodb = "img/". $_POST["nombreProducto"].".".$parte[1]; //asigna el nombre enla base de datos
	$destinoarc = "../img/". $_POST["nombreProducto"].".".$parte[1]; // asigna el nombre en el directorio
	unlink($destinoarc);
	copy($ruta, $destinoarc);
	$obj->__SET("imagen", $destinodb);

	$obj->actualizarProducto();
}
	//$obj->__SET("imagen", $_POST["imagen"]);
}

if (isset($_REQUEST["cambiar"])) {

	$id=$_POST["uno"];
	$est=$_POST["dos"];
	if ($est==0) {
		$obj->cambiarEstado($id, 1);
	}else if ($est==1) {
		$obj->cambiarEstado($id, 0);
	}
	echo $id."-".$est;
}
include_once(HTML_DIR."overall/Admin/header.php");
include_once(HTML_DIR."overall/Admin/nav.php");
include_once(HTML_DIR."overall/Admin/menus.php");
include('html/index/consultarProductos.php');
include_once(HTML_DIR."overall/Admin/footer.php");
include_once(HTML_DIR."overall/Admin/end.php");

?>
