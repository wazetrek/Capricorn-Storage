<?php

include (MODEL_DIR.'class.Categoria.php');

$db = new Conexion();

if (isset($_POST["Registrar"])) {
<<<<<<< HEAD

    $cate=$_POST['nombrecatego'];
=======
  $cate=$_POST['nombrecatego'];
>>>>>>> origin/master
    $obj=new Categoria($db->getConection());
    $obj->registrarCategoria($cate);
    header("location:?view=regCategoria");
}


  include_once(HTML_DIR."overall/Admin/header.php");
  include_once(HTML_DIR."overall/Admin/nav.php");
  include_once(HTML_DIR."overall/Admin/menus.php");
  include(HTML_DIR.'index/registrarCategoria.php');
  include_once(HTML_DIR."overall/Admin/footer.php");
  include_once(HTML_DIR."overall/Admin/end.php");
 ?>
