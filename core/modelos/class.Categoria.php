<?php


class Categoria
{
  private $con;

  function __construct($db)
  {
    $this->con = $db;
  }

  function registrarCategoria($nombre)
  {
<<<<<<< HEAD
  
      $sql="SELECT * FROM tbl_categoria WHERE nombre_categoria=:nombre";
=======
      $sql="SELECT* FROM tbl_categoria WHERE nombre_categoria=:nombre";
>>>>>>> origin/master
      $resultado=$this->con->prepare($sql);
      $arrayDatos= array(':nombre' => $nombre);
      $resultado->execute($arrayDatos);
      if ($resultado->fetch()>0) {
<<<<<<< HEAD
        echo "YA EXISTE O ESO CREO, NO ME JODA SURRON";
=======
        echo "YA EXISTE O ESO CREO, NO ME JODA SURRON ";
>>>>>>> origin/master
      }else{
      $sql="INSERT INTO tbl_categoria(nombre_categoria) VALUES (:nombre)";
      $resultado=$this->con->prepare($sql);
      $arrayDatos = array(':nombre' => $nombre);
      $resultado->execute($arrayDatos);
    }
<<<<<<< HEAD
  
}
=======
  }
>>>>>>> origin/master

    function consultarCategoria($cate){

      $registros=$this->con->query("SELECT * FROM tbl_categoria WHERE nombre_categoria='".$cate."'")->fetchAll(PDO::FETCH_OBJ);
      return $registros;
    }

    function consultarTodo(){

      $registros=$this->con->query("SELECT * FROM tbl_categoria")->fetchAll(PDO::FETCH_OBJ);
      return $registros;

    }

    function consultarTodoActivo(){

      $registros=$this->con->query("SELECT * FROM tbl_categoria WHERE estado_categoria=1")->fetchAll(PDO::FETCH_OBJ);
      return $registros;

    }

    function consultarTodoNombre(){

      $registros=$this->con->query("SELECT nombre FROM tbl_categoria")->fetchAll(PDO::FETCH_OBJ);
      return $registros;

    }

    function consultarCategoriaID($id){
      $result=$this->con->query("SELECT * FROM tbl_categoria WHERE idCategoria='".$id."'")->fetchAll(PDO::FETCH_OBJ);
      return $result;
    }

    function actualizarCategoria($id, $nom){
<<<<<<< HEAD
        $this->con->query1("SELECT nombre_categoria FROM tbl_categoria WHERE nombre_categoria='".$nom."'");
        if(isset($this)){
          echo "esta categoria ya existe no la puede actualizar con ese nombre, surron asqueroso";
        }else{

        }
=======
>>>>>>> origin/master
      $this->con->query("UPDATE tbl_categoria SET nombre_categoria='".$nom."' WHERE idCategoria='".$id."'");
    }

    function cambiarEstado($id, $est){
      $this->con->query("UPDATE tbl_categoria SET estado_categoria='".$est."' WHERE idCategoria='".$id."'");
    }
}
<<<<<<< HEAD
=======


>>>>>>> origin/master
?>
