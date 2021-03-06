<?php
  if(!$_SESSION['validarTSM']){
      header("location:inicio");
      exit();
  } else {
      if($_SESSION['ingresar']==1){
        include_once("vistas/modulos/inc/aside.php");
?>
<!-- INICIO DEL M.CLIENTE -->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Control
          <small>Clientes</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Inicio</a>
          </li>
          <li class="active">Clientes</li>
        </ol>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Clientes </h1>
                  <button class="pull-right btn btn-success" id="btnagregar" onclick="mostrarform(true)">
                    <i class="fa fa-plus-circle"></i> Agregar</button>
                  <div class="box-tools pull-right">
                  </div>
                </div>
                <!-- /.box-header -->
                <!-- centro -->
                <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Opciones</th>
                      <th>Nombre</th>
                      <th>Codigo</th>
                      <th>Tlf</th>
                      <th>Status</th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Nombre</th>
                      <th>Codigo</th>
                      <th>Tlf</th>
                      <th>Status</th>
                    </tfoot>
                  </table>
                </div>
                <div class="panel-body" id="formularioregistros">
                  <form name="formulario" id="formulario" method="POST">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="nombre">Nombre *:</label>
                      <input type="hidden" name="idcliente" id="idcliente">
                      <div class="col-sm-12">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="telefono">Telefono :</label>
                      <div class="col-sm-12">
                      <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="tipo_documento">Tipo de Persona *:</label>
                      <!-- INCLUIMOS LA CLASE SELECTPICKER -->
                      <div class="col-sm-12">
                      <select id="tipo_documento" class="form-control selectpicker" data-live-search="true" name="tipo_documento" required>
                        <option value="">--</option>
                        <option value="V-">NATURAL</option>
                        <option value="J-">JURIDICA</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="codigo">Codigo Fiscal *:</label>
                      <div class="col-sm-12">
                      <input type="number" class="form-control" name="codigo" id="codigo" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="email">Email :</label>
                      <div class="col-sm-12">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label" for="direccion">Direccion:</label>
                      <div class="col-sm-12">
                      <textarea class="form-control" name="direccion" id="direccion" placeholder="Direccion" maxlength="45" cols="30" rows="3"></textarea>
                      </div>                    
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-primary" type="submit" id="btnGuardar">
                        <i class="fa fa-save"></i> Guardar</button>
                      <button class="btn btn-danger" type="button" onclick="cancelarform()">
                        <i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                        Ayuda
                      </button>
                    </div>
                  </form>
                </div>
                <!--Fin centro -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Modulo Cliente</h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                  <dl class="dl-horizontal">
                    <dt>Nombre</dt>
                    <dd style="text-align:justify">Ingrese el nombre del nuevo cliente en el sistema.</dd>
                    <dt>Telefono</dt>
                    <dd style="text-align:justify">Ingrese el telefono del cliente en el sistema.</dd>
                    <dt>Tipo</dt>
                    <dd style="text-align:justify">Seleccione el tipo de documento fiscal del cliente (PN,PJ)</dd>
                    <dt>Codigo</dt>
                    <dd style="text-align:justify">Ingrese el codigo fiscal sin argumentos J, V o G, solo enteros.
                    </dd>
                    <dt>Email</dt>
                    <dd style="text-align:justify">Ingrese el email del cliente en el sistema.
                    </dd>
                    <dt>Direccion</dt>
                    <dd style="text-align:justify">Ingrese la direccion o domicilio fiscal del cliente.
                    </dd>
                  </dl>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </section>
<?php include_once("vistas/modulos/inc/footer.php"); ?>
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>    
<script src="vistas/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables/buttons.colVis.min.js"></script>
<script src="vistas/plugins/datatables/jszip.min.js"></script>
<script src="vistas/plugins/datatables/pdfmake.min.js"></script>
<script src="vistas/plugins/datatables/vfs_fonts.js"></script> 
<script type="text/javascript" src="vistas/js/cliente.js"></script>
</div>
<!-- FIN DEL M.CLIENTE -->
<?php
    } else {
      header("location:escritorio");
      ob_end_flush();
      exit();
    }
  }
?>