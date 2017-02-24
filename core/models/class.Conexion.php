<?php
 class Conexion extends PDO {
   private $tipo_de_base = 'mysql';
   public function __construct() {

      try{
         parent::__construct($this->tipo_de_base.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     		 $this->exec("SET	CHARACTER SET UTF8");
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   }
 }
?>
