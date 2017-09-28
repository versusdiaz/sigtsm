<?php include_once("vistas/modulos/inc/aside.php"); ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
        Descuentos
        <small>Choferes</small>
      </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
                        <li class="active">Descuentos Choferes</li>
                    </ol>
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h1 class="box-title">Descuentos Choferes</h1>
                                        <button class="pull-right btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
                                        <div class="box-tools pull-right"> </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- centro -->
                                    <div class="panel-body table-responsive" id="listadoregistros">
                                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                                            <thead>
                                                <th>Opciones</th>
                                                <th>Concepto</th>
                                                <th>Chofer</th>
                                                <th>Monto</th>
                                            </thead>
                                            <tbody> </tbody>
                                            <tfoot>
                                                <th>Opciones</th>
                                                <th>Concepto</th>
                                                <th>Chofer</th>
                                                <th>Monto</th>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="panel-body" id="formularioregistros">
                                        <form name="formulario" id="formulario" method="POST">
                                            <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <label>Chofer(*):</label>
                                                <input type="hidden" name="idchofer_descuento" id="idchofer_descuento">
                                                <select id="idproveedor" name="idproveedor" class="form-control selectpicker" data-live-search="true" required> </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label>Fecha(*):</label>
                                                <input type="date" class="form-control" name="fecha" id="fecha" required=""> </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label>Descuento(*):</label>
                                                <select name="iddescuento" id="iddescuento" class="form-control selectpicker" required="">
                                                    <option value="Transferencia">Transferencia</option>
                                                    <option value="Cheque">Cheque</option>
                                                    <option value="Efectivo">Efectivo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                <label>¿Es porcentual?:</label>
                                                <select name="tipodemonto" id="tipodemonto" class="form-control selectpicker" required="">
                                                    <option value="">--</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <label>Monto Descontado:</label>
                                                <input type="text" class="form-control" name="montodesc" id="montodesc" maxlength="20" placeholder="Monto descontado"> </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <label>% Descontado:</label>
                                                <input type="text" class="form-control" name="porcentaje" id="porcentaje" maxlength="2" placeholder="Ingrese porcentaje"> </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                                <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
                    <!-- /.content -->
                    <div class="modal modal-primary fade" id="modal-primary">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Modulo Descuentos</h4>
                          </div>
                          <div class="modal-body">
                             <div class="box-body">
                                          <dl class="dl-horizontal">
                                            <dt>Chofer</dt>
                                            <dd style="text-align:justify">Seleccione un chofer al cual se le aplicara gravamen, este chofer debe estar activo y/o registrado previamente en el sistema.</dd>
                                            <dt>Fecha</dt>
                                            <dd style="text-align:justify">Indique la fecha donde se aplicara el gravamen, esta fecha debe estar en el rango de la semana para efectos de reportes de pronto pago</dd>
                                            <dt>Descuento</dt>
                                            <dd>Listados de descuentos aplicables, previamente definidos en el modulo de descuento.</dd>
                                            <dt>Porcentual</dt>
                                            <dd>Indique si el gravamen es porcentual, de ser asi ingrese con un entero el % a retener del total a pagar del chofer, de lo contrario se supondra que es un monto fijo y debera ingresar el monto a retener en Bs.
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
                    <!-- Modal -->
                    <!-- Fin modal -->
                </section>
                <!-- Main content -->
                <!-- /.content -->
                <?php include_once("vistas/modulos/inc/footer.php"); ?>
            </div>