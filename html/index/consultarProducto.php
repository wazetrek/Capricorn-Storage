<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> PRODUCTO</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.php">HOME</a></li>
      <li><i class="fa fa-laptop"></i>PRODUCTO</li>
      <li><i class="fa fa-table"></i>Consultar Producto</li>
    </ol>
  </div>
                    <header class="panel-heading">
                      CONSULTAR PRODUCTO
                    </header>
                    <center>
                    <section style="height: 220px;
                    width: 950px;
                    margin:2em;
                    padding:1em;
                    background: white;
                    color: black;
                    border-radius: 6px;
                    -webkit-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
                   -moz-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
                   -box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);">
<form action="" method="post" onsubmit="return validarCamposBuscarProductos()">

                      <p><h4>Formulario de Consulta:</h4></p>
                      <div class="form-group">
                      <input type="text" name="buscar" id="buscar" placeholder="Ingrese el nombre que desea consultar" style=" width:300px;">

                      <select class="" name="filtro" id="filtro">
                        <option value="0">Nombre</option>
                        <option value="1">Categoria</option>
                        <option value="2">Estado</option>
                     </select>
                     <br>
                      <button type="submit" class="btn btn-default" name="Buscar" id="Buscar">Buscar</button>
                    </div>
                      </form>
                      <form action="" method="post">
                      <button type="submit" class="btn btn-default" name="BuscarTodo" id="BuscarTodo">BuscarTodo</button>
                    </form>
                  </section>



                </center>
                <section class="panel">
                    <header class="panel-heading">
                        Productos
                    </header>

                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_profile"></i> Id</th>
                           <th><i class="icon_calendar"></i> Nombre </th>
                           <th><i class="icon_calendar"></i> Precio </th>
                           <th><i class="icon_calendar"></i> Categoria </th>
                           <th><i class="icon_calendar"></i> Estado </th>
                           <th><i class="icon_cogs"></i> Acciones</th>
                        </tr>
                          <!-- Este foreach tiene una estructura distinta -->
                          <!-- FORMULARIOOOOOOOOOOOOOO -->
                          <form class="" action="" method="post">

                        <?php
                        if ($registros>0) {


                            foreach ($registros as $todos):?>
                        <tr>
                           <td id="idcat"><?= $todos->idProducto?></td>
                           <td id="nombArt"><?= $todos->nombre?></td>
                           <td id="preArt"><?= $todos->precio?></td>
                           <td id="nomCat"><?= $todos->nombre_categoria?></td>
                           <td>
                           <?php if ($todos->estado_producto == 1){
                              echo  "Activo";
                           }else if ($todos->estado_producto == 0) {
                              echo "Inactivo";
                           }
                           ?>
                           </td>
                           <td>
                             <input type="hidden" name="uno" id="uno" value="<?= $todos->idProducto ?>">
                             <input type="hidden" name="dos" id="dos" value="<?= $todos->estado_producto ?>">
                             <input type="hidden" name="tres" id="tres" value="<?= $todos->imagen ?>">
                            <div class="btn-group">
                              <button id="btnAct" type="button" class="open" >Actualizar</button>
                              <button type="submit" name="cambiar" value="<?= $todos->idProducto."-".$todos->estado_producto ?>" >Cambiar Estado</button>
                            </div>
                            </td>
                        </tr>

                        <?php
                          endforeach;
                          }
                         ?>
                       </form>
                     </tbody>
                    </table>
                </section>
            </div>

             <script type="text/javascript">
          $(document).ready(function()
          {
            $('#btnAct').click(function() {
            $('#txtIdCategoria').text('HOLA');
          });
          }
          </script>
          <style>

        .artAct{
          margin-top: 40px;
          background: #FFF;
          padding: 3em;
          box-shadow: 0 1px, 2px rgba(0, 0, 0, 0.5);
        }

        .modal{
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          display: none;
        }

        .artAct input, select{
          margin: 20px;
          padding-left: : 10px;
          padding-right: 10px;
          padding-top: 5px;
          padding-bottom: 5px;
        }
        </style>



      <div class="modal">
        <article class="artAct">

          <form class="" action="" method="post" enctype="multipart/form-data" id="actCategoria"  name="actCategoria" onsubmit="return validarCamposModalProducto()">
            <fieldset>
              <legend><h2>Actualizar Producto</h2></legend>
            <table style="margin-left:15em;">
              <tr >
                <td colspan="4">
                  <center>
                  <label for="id">ID Producto</label>
                  <input type="text" id="cat2" name="cat2">
                  </center>
                </td>
              </tr>
              <tr>
                <td><label for="nombre">Nombre Actual:</label></td>
                <td><input name="nombreProAct" id="nombreProAct"></td>
                <td><label for="nombre">Nuevo Nombre:</label></td>
                <td><input type="text" name="nombreProducto" id="nombreProducto" value="" placeholder="Ingrese el nuevo nombre"></td>
              </tr>
              <tr>
                <td><label for="estado">Precio Actual:</label></td>
                <td><input name="precioProAct" id="precioProAct"></td>
                <td><label for="estado">Nuevo Precio:</label></td>
                <td><input type="text" name="precio" id="precio" placeholder="Ingrese el nuevo nombre"></td>
              </tr>
              <tr>
                <td><label for="estado">Categoría Asignada:</label></td>
                <td><input name="nomCatAct" id="nomCatAct"></td>
                <td><label for="estado">Nueva Categoría:</label></td>
                <td>
                    <select class="" name="categoria" id="categoria" style="width:165px;">
                        <option value=""></option>
                        <?php
                        foreach ($result as $cat):?>
                            <option value="<?= $cat->idCategoria?>"><?= $cat->nombre_categoria?></option>
                            <?php
                        endforeach;
                        ?>
                    </select>
                </td>
              </tr>
              <tr>
                <td  colspan="4"><center><input type="file" id="imagen" name="imagen"></center></td>
              </tr>
              <tr>
                <td colspan="4">
                <label for="imagen">Imagen Actual:</label>
                <img src="<?php echo $todos->imagen ?>" height="140" width="140">
                    <input type="hidden" name="imgProAct" id="imgProAct" value="<?php echo $todos->imagen ?>">
                <label>Imagen Seleccionada</label>
                <img id="vista" alt="Nueva Imagen" height="140" width="140">
                </td>
              </tr>
              <tr>
                <td colspan="4">
                <center>
                  <input type="submit" name="Actualizar" value="Actualizar">
                </center>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <center>
                  <button type="button" class="closeModel">Cerrar</button
                  </center>
                </td>
              </tr>
            </table>
            </fieldset>
          </form>
        </article>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript" src="View/js/admin/modal.js"></script>
      <script src="View/js/admin/preview.js"></script>
