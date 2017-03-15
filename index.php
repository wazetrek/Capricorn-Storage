<?php

  require('core/core.php');
  if (isset($_GET['view'])) {
    if (file_exists('core/Controllers/' .strtolower($_GET ['view']). 'Controller.php')) {
      include('core/Controllers/' .strtolower($_GET ['view']). 'Controller.php');
    }else {
      include('core/Controllers/errorController.php');
    }
  }else {
    include('core/Controllers/indexController.php');
  }
  
 ?>
