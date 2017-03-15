<script src="View/js/admin/preview.js"></script>
<script type="text/javascript" src="View/js/scroll/jquery.js"></script>
<div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> PRODUCTOS</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?view=admin">HOME</a></li>
            <li><i class="fa fa-laptop"></i>PRODUCTO</li>
            <li><i class="fa fa-table"></i>Registrar Producto</li>
          </ol>
        </div>
      </div>

      <header class="panel-heading">
        REGISTRAR PRODUCTO
      </header>
      <center>
<form class="form-horizontal" method="post" enctype="multipart/form-data"  action="?view=regProducto" onsubmit="return validarCamposProducto()">
  <section class="register" style="height: 420px;
  width: 950px;
  margin:2em;
  padding:1em;
  background: white;
  color: black;
  border-radius: 6px;
  -webkit-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
 -moz-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
 -box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);">
<p><h4>Formulario de Registro:</h4></p>

  <div class="form-group">
    <table style="padding:1em; margin:10px;">
      <tr>
        <td ><label for="estado">Nombre del Producto:</label></td>
        <td><input type="text" name="nombre" id="nombreproducto" placeholder="nombre Producto" >
        <div class="" id="nombreproductovalido"></div></td>
        <td><label for="estado">Precio del Producto:</label></td>
        <td><input type="text" name="precio" id="precioproducto" placeholder="precio Producto" ><br></td>
      </tr>
      <tr>
        <td><label for="estado">Categoria:</label></td>
        <td>
          <select class="" name="categoria" id="categoria">
            <option value=""></option>
            <?php
                foreach ($registros as $todos):?>
                <option><?= $todos->idCategoria." - ".$todos->nombre_categoria?></option>
                <?php
                endforeach;
            ?>
          </select>
        </td>
        <td><label for="estado">Estado:</label></td>
        <td>
          <select class="" name="estado" id="estado">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
          </select>
        </td>
      </tr>
    </table>

        <input id="imagen" type="file" name="imagen"><br>
    <img id="vista" alt="Vista Previa" height="140" width="140">
  </div>
  <div class="form-group">
      <input type="submit" class="btn btn-default" values="Registrar" name="Registrar" id="Registrar">

  </div>
</section>
<aside>
  <h3>Capricorn<img alt="Logo" height="120" width="100">Storage</h3>
</aside>
</form>
</center>
