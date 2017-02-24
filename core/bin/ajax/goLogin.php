<?php
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
  $db = new Conexion();
  $user = $_POST['user'];
  $pass = Encrypt($_POST['pass']);

  $sql="SELECT idUsuario FROM tbl_usuario WHERE usuario='$user' AND contrasena='$pass' LIMIT 1;";
  $resultado=$db->prepare($sql);
  $resultado->execute();
  $vals = $resultado->rowCount();

  if ($vals > 0) {
    $_SESSION['usuario'] = $user;
    echo 1;
  }else {
    echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR</strong> credenciales incorrectas.
</div>';
  }
}else {
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR</strong> Datos deben estar llenos.
</div>';
}


 ?>
