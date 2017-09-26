<?php include_once("vistas/modulos/inc/aside.php"); ?>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
   <div class="content-wrapper">
    <section class="content-header">
        <h1>
        Control
        <small>Clientes</small>
      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clientes</li>
        </ol>
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Clientes </h1>
                          <button class="pull-right btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                      <table id="tblistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          <th>NOMBRE</th>
                          <th>CODIGO</th>
                          <th>TLF</th>
                          <th>STATUS</th>
                          <th>OPCIONES</th>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                          <th>NOMBRE</th>
                          <th>CODIGO</th>
                          <th>TLF</th>
                          <th>STATUS</th>
                          <th>OPCIONES</th>
                        </tfoot>
                      </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Nombre *:</label>
                          <input type="hidden" name="idcliente" id="idcliente">
                           <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <label>Telefono :</label> 
                          <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                        </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <label>Tipo *:</label>   <!-- INCLUIMOS LA CLASE SELECTPICKER -->
                          <select id="tipo_documento" class="form-control selectpicker" data-live-search="true" name="tipo_documento" required>
                              <option value="">--</option>
                              <option value="V-">CEDULA</option>
                              <option value="J-">RIF</option>
                          </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Codigo *:</label>
                          <input type="number" class="form-control" name="codigo" id="codigo" step="1" required>
                        </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Email :</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Direccion:</label>
                          <textarea class="form-control" name="direccion" id="direccion" placeholder="Direccion" maxlength="45" cols="30" rows="3"></textarea>
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