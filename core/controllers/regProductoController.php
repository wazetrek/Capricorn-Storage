<?php

include (MODEL_DIR.'class.Productos.php');
$db = new Conexion();
//precarga de categorias
$productos=new  Producto($db->getConection());
$registros=$productos->consultarTodoActivo();
// fin precarga categorias

//registro de producto
if (isset($_POST["Registrar"])) {
  $error = "";
  if (! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0) { // no existe la imagen? || hay errores?
    echo "ha ocurrido un error al cargar la imagen la imagen";
  }else{

    $img = $_FILES["imagen"]["name"]; //nombre original de la imagen
    $parte = explode(".", $img); // exllode para partir el nombre de la imagen y la extencion
    $ruta = $_FILES["imagen"] ["tmp_name"]; // lugar de donde viene el archivo origen de la imagen
    $destinodb = "View/img/". $_POST["nombre"].".".$parte[1]; //asigna el nombre enla base de datos
    $destinoarc = "View/img/". $_POST["nombre"].".".$parte[1]; // asigna el nombre en el directorio
    copy($ruta, $destinoarc); // crea la imagen en el directorio (de donde viene, para donde va)

    $productos->__SET("nombre", $_POST["nombre"]);
    $productos->__SET("precio", $_POST["precio"]);
    /*if ($_POST["categoria"] == ) {

    }*/
    $productos->__SET("categoria", $_POST["categoria"]);
    $productos->__SET("estado", $_POST["estado"]);
    $productos->__SET("imagen", $destinodb);


   $productos->registrarProducto();
   header("location:?view=regProducto");
     
 }
 }

 include_once(HTML_DIR."overall/Admin/header.php");
 include_once(HTML_DIR."overall/Admin/nav.php");
 include_once(HTML_DIR."overall/Admin/menus.php");
 include(HTML_DIR.'index/regProducto.php');
 include_once(HTML_DIR."overall/Admin/footer.php");
 include_once(HTML_DIR."overall/Admin/end.php");


?>
