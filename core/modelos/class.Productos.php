<?php


class Producto
{
  private $con ;
  private $idProducto;
  private $nombre;
  private $precio;
  private $estado;
  private $categoria;
  private $imagen;

 // asigna el nombre en el directorio
	// crea la imagen en el directorio (de donde viene, para donde va)



  public function __construct($db)
  {
    $this->con = $db;
  }

  public function __SET($atributo, $valor)
  {
    $this->$atributo = $valor;
  }

  public function __GET($atributo)
  {
    return $this->$atributo;
  }

  function registrarProducto()
  {
<<<<<<< HEAD
=======

>>>>>>> origin/master
      $sql="INSERT INTO tbl_producto(nombre,precio,estado_producto,idCategoria,imagen) VALUES (:nombre,:precio,:estado,:idCategoria,:imagen)";
      $resultado=$this->con->prepare($sql);
      $arrayDatos = array(':nombre' => $this->nombre,':precio'=>$this->precio,':estado'=>$this->estado,':idCategoria'=>$this->categoria,':imagen'=>$this->imagen);
      $resultado->execute($arrayDatos);
<<<<<<< HEAD
      
  }
    
=======
  }

>>>>>>> origin/master
  public function consultarTodo()
  {
    $sql = "SELECT * FROM tbl_producto p JOIN tbl_categoria c ON p.idCategoria = c.idCategoria";
    $stm = $this->con->query($sql)->fetchAll(PDO::FETCH_OBJ);
    return $stm;

  }

  public function consultarNombre()
  {
    $sql = "SELECT * FROM tbl_producto p JOIN tbl_categoria c ON p.idCategoria=c.idCategoria WHERE p.nombre=:nombre";
    $stm = $this->con->prepare($sql)->fetchAll(PDO::FETCH_OBJ);
    $stm = $this->con->prepare($sql);
    $stm->bindValue(':nombre', $this->nombre);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_OBJ);
  }

  public function consultarCategoria()
  {
    $sql = "SELECT * FROM tbl_producto p JOIN tbl_categoria c ON p.idCategoria=c.idCategoria WHERE nombreCategoria=:categoria";
    $stm = $this->con->prepare($sql);
    $stm->bindValue(':categoria', $this->categoria);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_OBJ);
  }

  public function consultarEstado()
  {
    $sql = "SELECT * FROM tbl_producto WHERE estado_producto= :estado";
    $stm = $this->con->prepare($sql);
    $stm->bindValue(':estado', $this->estado);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_OBJ);
  }

  public function actualizarProducto(){
<<<<<<< HEAD
=======
    $sql1="SELECT idCategoria FROM tbl_categoria WHERE nombre_categoria=:categoria";
    $stm1=$this->con->prepare($sql1);
    $stm1->bindValue(':categoria', $this->categoria);
    $stm1->execute();
    $nombre=$stm1->fetchAll(PDO::FETCH_OBJ);
    $prueba="";

    foreach ($nombre as $jolo) {
      $prueba=$jolo->idCategoria;
    }

>>>>>>> origin/master
    $sql="UPDATE tbl_producto SET nombre=:nombre, precio=:precio, idCategoria=:idCategoria, imagen=:imagen WHERE idProducto=:idProducto";
    $stm=$this->con->prepare($sql);
    $stm->bindValue(':nombre', $this->nombre);
    $stm->bindValue(':precio', $this->precio);
<<<<<<< HEAD
    $stm->bindValue(':idCategoria',$this->categoria);
=======
    $stm->bindValue(':idCategoria',$prueba);
>>>>>>> origin/master
    $stm->bindValue(':imagen', $this->imagen);
    $stm->bindValue(':idProducto', $this->idProducto);
    $stm->execute();

  }

  public function cambiarEstado($id, $est)
  {
    $sql="UPDATE tbl_producto SET estado_producto=:estado WHERE idProducto=:idProducto";
    $stm = $this->con->prepare($sql);
    $stm->bindValue(':estado', $est);
    $stm->bindValue(':idProducto', $id);
    $stm->execute();
  }


  function consultarTodoActivo(){

<<<<<<< HEAD
    $result=$this->con->query("SELECT * FROM tbl_categoria WHERE estado_categoria=1")->fetchAll(PDO::FETCH_OBJ);
    return $result;
=======
    $registros=$this->con->query("SELECT * FROM tbl_categoria WHERE estado_categoria=1")->fetchAll(PDO::FETCH_OBJ);
    return $registros;
>>>>>>> origin/master

  }


}


?>
