<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Categorías</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.php">HOME</a></li>
      <li><i class="fa fa-laptop"></i>CATEGORÍA</li>
      <li><i class="fa fa-table"></i>Consultar Categorías</li>
    </ol>
  </div>


                    <header class="panel-heading">
                      CONSULTAR CATEGORÍA
                    </header>
                      <center>
                        <section style="
                          height: 220px;
                          width: 950px;
                          margin:2em;
                          padding:1em;
                          background: white;
                          color: black;
                          border-radius: 6px;
                          -webkit-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
                         -moz-box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);
                         -box-shadow: 11px 11px 7px -8px rgba(113,129,163,1);">
                      <form action="" method="post" onsubmit="return validarCamposBuscarCategoria()">
                          <p><h4>Formulario de Consulta:</h4></p>
                      <p><h5>Nombre de la Categoría:</h5></p>
                       <div class="form-group">
                      <input type="text" name="nomcat" id="nomcat" placeholder="Ingrese el nombre que desea consultar" style=" width:300px;">
                    </div>
                      <button style="margin:5px;" type="submit" class="btn btn-default" name="Buscar" id="Buscar">Buscar</button>

                      </form>
                      <form class="" action="" method="post">
                        <button style="background:#83A9C6;" type="submit" class="btn btn-default" name="BuscarTodo" id="BuscarTodo">BuscarTodo</button>
                      </form>
                      </section>
                      <aside>
                        <h3>Capricorn</h3><img src="../img/logoc.jpg" height="120" width="100"><h3>Storage</h3>
                      </aside>
                    </center>

                    <header class="panel-heading">
                        Cotizaciones
                    </header>

                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_profile"></i> Id</th>
                           <th><i class="icon_calendar"></i> Nombre </th>
                           <th><i class="icon_calendar"></i> Estado </th>
                           <th><i class="icon_cogs"></i> Acciones</th>
                        </tr>

                          <!-- Este foreach tiene una estructura distinta -->


                          <form id="resultCat" name="resultCat" action="" method="post">


                        <?php
                        if ($registros>0) {


                            foreach ($registros as $todos):?>
                        <tr>
                           <td id="idcat" name="idcat"><?php echo $fac=$todos->idCategoria ?></td>
                           <td><?= $todos->nombre_categoria?></td>
                           <td name="estcat" id="estcat">
                             <?php
                             $est=$todos->estado_categoria;
                            if ($todos->estado_categoria==1) {
                             echo "Habilitado";
                           }else if($todos->estado_categoria==0){
                             echo "Deshabilitado";

                           } ?></td>
                           <td>
                             <input type="hidden" name="uno" id="uno" value="<?php echo $todos->idCategoria ?>">
                             <input type="hidden" name="dos" id="dos" value="<?php echo $todos->estado_categoria ?>">
                            <div class="btn-group">
                              <button id="btnAct"  type="button" name="actualizar" class="open">Cambiar Nombre</button>
                              <button type="submit" id="cambiar" name="cambiar" class="cambiar" onclick="cambiarEstado();">Cambiar Estado</button>
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
