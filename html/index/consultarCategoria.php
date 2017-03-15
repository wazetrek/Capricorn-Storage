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
                              <button id="btnAct"  type="button" name="actualizar"  class="open">Cambiar Nombre</button>
                              <button type="submit" id="cambiar" name="cambiar" class="cambiar" value="<?= $todos->idCategoria."-".$todos->estado_categoria ?>">Cambiar Estado</button>
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

          <form class="" action="" method="post" id="actCategoria" name="actCategoria"  onsubmit="return validarCamposModalCategoria()">
            <fieldset>
              <legend><h2>Actualizar Categoria</h2></legend>
            <center><label for="id">ID Categoría</label><input type="text" id="cat2" name="cat2"></center>
            <table class="actualizarCategoria">
              <tr id="dataActual">
                <td>
                  <label for="nombre">Nombre Actual:</label>
                  <input type="text" name="" value=""  id="" placeholder="Ingrese el nuevo nombre">
                </td>
              </tr>
            </table>
            <table class="actualizarCategoria">
              <tr>
                <td>
                  <label for="nombre">Nombre Nuevo:</label>
                  <input type="text" name="nomcat2" value=""  id="nomcat2" placeholder="Ingrese el nuevo nombre">
                </td>
              </tr>
            </table>

            <div class="">
                <button type="submit" name="actualizar" value="Actualizar" id="actualizar">Actualizar</button>
                <button type="button" class="closeModel">Cerrar</button>
            </div>
            </fieldset>
          </form>
        </article>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript" src="View/js/admin/modal.js">

      </script>
