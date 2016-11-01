<?php include_once(HTML_OVERALL .'header.php'); ?>

  <?php include_once(HTML_OVERALL . 'menuprofileinf.php') ?>
          <br />

          <?php include_once (HTML_OVERALL . 'sidebarmenu.php') ?>

        </div>
      </div>

    <?php include_once (HTML_OVERALL .'topnav.php') ?>


          <!-- Contenido de la Pagina - page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Gestión Combustibles</h3>
                </div>


              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Formulario </h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Información</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Lista</a>
                          </li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <div class="x_content">
                              <form class="form-horizontal form-label-left" novalidate>

                                <div class="item form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">ID <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" placeholder="COD. " type="text">
                                  </div>
                                </div>

                                <div class="item form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombre" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="Mi usuario" required="required" type="text">
                                  </div>
                                </div>

                                <div class="item form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observaciones">Observaciones:
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="observaciones" required="required" name="observaciones" class="form-control col-md-7 col-xs-12"></textarea>
                                  </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancelar</button>
                                    <button id="send" type="submit" class="btn btn-success">Enviar</button>
                                  </div>
                                </div>
                              </form>
                            </div>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <!-- Inicio de la tabla -->
                          <div class="clearfix"></div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Tabla de busqueda: <small>Usuarios</small></h2>
                                <!-- Boton de expancion del panel -->
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                      <table id="datatable" class="table table-hover table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>Usuario</th>
                                            <th>Correo</th>
                                            <th>Perfil</th>
                                            <th>Permisos</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $user) { ?>
                                            <tr>
                                              <td> <?php echo $user['idusuario']; ?> </td>
                                              <td> <?php echo $user['usuario']; ?> </td>
                                              <td> <?php echo $user['correo']; ?> </td>
                                              <td> <?php echo $user['perfil']; ?> </td>
                                              <td> <?php echo $user['permiso']; ?> </td>

                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                      </table>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Fin de la Tabla -->
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->


<?php include_once(HTML_OVERALL .'footer.php') ?>
