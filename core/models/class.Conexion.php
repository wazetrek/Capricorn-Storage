<?php
 class Conexion {
   private $tipo_de_base = 'mysql';
   private $db = null;
   public function getConection() {

      try{
         $this->db = new PDO($this->tipo_de_base.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->db->exec("SET  CHARACTER SET UTF8");
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
      return $this->db;
   }
 }
?>