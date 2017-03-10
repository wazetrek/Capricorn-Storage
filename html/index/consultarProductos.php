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

                  <aside>
                    <h3>Capricorn</h3><img src="../img/logoc.jpg" height="120" width="100"><h3>Storage</h3>
                  </aside>

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
                          <form class="" action="" method="post">

                        <?php
                        if ($registros>0) {


                            foreach ($registros as $todos):?>
                        <tr>
                           <td id="idcat"><?= $todos->idProducto?></td>
                           <td><?= $todos->nombre?></td>
                           <td><?= $todos->precio?></td>
                           <td><?= $todos->nombre_categoria?></td>
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
                            <div class="btn-group">
                              <button id="btnAct" type="button" class="open" >Actualizar</button>
                              <button type="submit" name="cambiar" >Cambiar Estado</button>
                            </div>
                            </td>
                        </tr>

                        <?php
                          endforeach;
                          }
                         ?>
                       </form>
                    <!-- href="Modelo/editarEmpleado.php?usuario=<?= $todos->usuario ?> & password=<?= $todos->password ?> & correo=<?= $todos->email ?>" -->

                         <!-- <div class="modal fade" id="modali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="Titulo">Actualizar Usuario de Empleado</h4>
                    </div>
                    <div class="modal-body">
                    <form>
                    <div class="form-group" >
                    <label for="recipient-name" class="control-label">Usuario:</label>
                    <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="control-label">Contraseña:</label>
                    <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="control-label">Correo:</label>
                    <input type="text" class="form-control" id="recipient-name">
                    </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                    </div>
                    </div>
                    </div>
                    </div> -->

                     </tbody>
                    </table>

                </section>
            </div>
