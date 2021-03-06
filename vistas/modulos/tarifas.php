<?php
  if(!$_SESSION['validarTSM']){
      header("location:inicio");
      exit();
  } else {
      if($_SESSION['carteleras']==1){
        include_once("vistas/modulos/inc/aside.php");
?>
<!-- INICIO DEL M.TARIFAS -->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Tarifas
          <small>TSM / CARIBBEAN</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Otros</a>
          </li>
          <li class="active">Tarifas</li>
        </ol>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Tarifas TSM - CARIBBEAN</h1>
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
                      <th>Ruta</th>
                      <th>T. Chofer</th>
                      <th>T. TSM</th>
                      <th>T. CARIBBEAN</th>
                      </tfoot>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Ruta</th>
                      <th>T. Chofer</th>
                      <th>T. TSM</th>
                      <th>T. CARIBBEAN</th>
                    </tfoot>
                  </table>
                </div>
                <div class="panel-body" id="formularioregistros">
                  <form name="formulario" id="formulario" method="POST">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label">Ruta *:</label>
                      <input type="hidden" name="idtarifa" id="idtarifa">
                      <div class="col-sm-12">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ruta" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label">Monto Chofer *:</label>
                      <div class="col-sm-12">
                      <input type="number" class="form-control" name="montotsmp" id="montotsmp" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label">Monto TSM *:</label>
                      <div class="col-sm-12">
                      <input type="number" class="form-control" name="montotsmc" id="montotsmc" required>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label class="col-sm-12 control-label">Monto CARIBBEAN *:</label>
                      <div class="col-sm-12">
                      <input type="number" class="form-control" name="montocaribec" id="montocaribec" required>
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
                <h4 class="modal-title">Modulo Seguros</h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                  <dl class="dl-horizontal">
                    <dt>Numero</dt>
                    <dd style="text-align:justify">Ingrese el numero de seguro del vehiculo.</dd>
                    <dt>Vence</dt>
                    <dd style="text-align:justify">Indique la fecha de vencimiento del seguro del vehiculo.</dd>
                    <dt>Tipo</dt>
                    <dd style="text-align:justify">Seleccione el tipo de seguro que posee el vehiculo.</dd>
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
<script type="text/javascript" src="vistas/js/tarifas.js"></script>
</div>
<!-- FIN DEL M.TARIFAS -->
<?php
    } else {
      header("location:escritorio");
      ob_end_flush();
      exit();
    }
  }
?>