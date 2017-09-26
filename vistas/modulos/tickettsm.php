<?php include_once("vistas/modulos/inc/aside.php"); ?>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
   <div class="content-wrapper">
    <section class="content-header">
        <h1>
        Control
        <small>Tickets TSM</small>
      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Tickets</li>
        </ol>
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Tickets TSM </h1>
                          <button class="pull-right btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                      <table id="tblistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          <th>FECHA</th>
                          <th>AGENCIA</th>
                          <th>TICKET</th>
                          <th>BUQUE</th>
                          <th>MONTO</th>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                          <th>FECHA</th>
                          <th>AGENCIA</th>
                          <th>TICKET</th>
                          <th>BUQUE</th>
                          <th>MONTO</th>
                        </tfoot>
                      </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Cliente *:</label>
                          <input type="hidden" name="idtickettsm" id="idtickettsm">
                          <select id="idcliente" class="form-control selectpicker" data-live-search="true" name="idcliente"></select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <label>Chofer *:</label>   <!-- INCLUIMOS LA CLASE SELECTPICKER -->
                          <select id="idchofer" class="form-control selectpicker" data-live-search="true" name="idchofer"></select>
                        </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <label>Buque *:</label>   <!-- INCLUIMOS LA CLASE SELECTPICKER -->
                          <select id="idcentro" class="form-control selectpicker" data-live-search="true" name="idcentro"></select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Codigo *:</label>
                          <input type="number" class="form-control" name="codigo" id="codigo" step="1" required>
                        </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Fecha Pago *:</label>
                          <input type="date" class="form-control" name="fechapago" id="fechapago" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Fecha Posteo *:</label>
                          <input type="date" class="form-control" name="fecha" id="fecha" required>
                        </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Monto a Pagar *:</label>
                          <input type="number" class="form-control" name="montop" id="montop" step="0.1" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Monto a Retener:</label>
                          <input type="number" class="form-control" name="montoret" id="montoret" required disabled>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Monto a Cobrar:</label>
                          <input type="number" class="form-control" name="montoc" id="montoc" step="0.1">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <label>Estado *:</label>   <!-- INCLUIMOS LA CLASE SELECTPICKER -->
                          <select id="estado" class="form-control" name="estado" required>
                              <option value="">--</option>
                              <option value="0">POR PAGAR</option>
                              <option value="1">PAGADO</option>
                          </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Descripcion:</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" maxlength="255" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                          <button class="btn btn-danger" type="button" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
    </section>
    <!-- Main content -->
    
    <!-- /.content -->
    <?php include_once("vistas/modulos/inc/footer.php"); ?>
</div>