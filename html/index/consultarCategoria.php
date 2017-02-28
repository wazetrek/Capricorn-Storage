<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Categorías</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="?view=admin">inicio</a></li>
      <li><i class="fa fa-table"></i>Consultar Categorías</li>

    </ol>
  </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      Consultar Cotización
                    </header>
                    <section class="panel-heading" style="margin:1em; padding:1em;">
                      <form action="consultarCategoria.php" method="post">
                      <p><h5>Nombre:</h5></p>
                      <input type="text" name="nomcat" placeholder="Ingrese el nombre que desea consultar" style=" width:300px;">
                      <button type="submit" class="btn btn-default" name="Buscar" id="Buscar">Buscar</button>
                      <button type="submit" class="btn btn-default" name="BuscarTodo" id="BuscarTodo">BuscarTodo</button>
                      </form>
                      </section>
                      <div class="panel-body">
                       <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Cotizaciones
                    </header>

                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_profile"></i> Id</th>
                           <th><i class="icon_calendar"></i> Nombre </th>
                           <th><i class="icon_cogs"></i> Acciones</th>
                        </tr>

                          <!-- Este foreach tiene una estructura distinta -->
                        <?php
                            foreach ($registros as $todos):?>
                        <tr>
                           <td><?= $todos->idCategoria?></td>
                           <td><?= $todos->nombre?></td>
                           <td>
                            <div class="btn-group">
                              <button type="button" class="open">Actualizar</button>
                            </div>
                            </td>
                        </tr>

                        <?php
                          endforeach;

                         ?>
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
