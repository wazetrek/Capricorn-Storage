<?php

  session_start();

  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'capricornstorage');


  define('HTML_DIR', 'html/');
  define('APP_TITLE', 'CS | Página Principal | CS');
  define('APP_COPY', 'Copyright &copy; ' .date('Y', time()) . ' Capricorn Strorage.');

  require('core/models/class.Conexion.php');
  require('core/bin/functions/Encrypt.php');


 ?>
