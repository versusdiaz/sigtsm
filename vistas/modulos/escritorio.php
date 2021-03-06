<?php
  if(!$_SESSION['validarTSM']){
      header("location:inicio");
      exit();
  } else {
      if(!isset($_SESSION['idchofer'])){
        include_once("vistas/modulos/inc/aside.php");
?>
<!-- INICIO DEL ESCRITORIO USUARIOS COMUNES -->
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <link rel="stylesheet" href="vistas/plugins/Ionicons/css/ionicons.min.css">
            <section class="content-header">
                <h1>
                    Bienvenido
                    <small>Sistema Transmarim</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Inicio</a>
                    </li>
                    <li class="active">Escritorio</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3 id="cantS"></h3>
                                <p>Servicios - Tickets</p>
                            </div>
                            <a href="tickettsm">
                                <div class="icon">
                                    <i class="ion ion-model-s"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>Imprimir</h3>
                                <p>Reportes - Prepagos</p>
                            </div>
                            <a href="imprimiru">
                                <div class="icon">
                                    <i class="ion ion-printer"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3 id="cantU">
                                </h3>
                                <p>Control de Usuarios</p>
                            </div>
                            <a href="usuario">
                                <div class="icon">
                                    <i class="ion ion-ios-paper"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3 id="cantV"></h3>
                                <p>Datos del Vehiculo</p>
                            </div>
                            <a href="vehiculo">
                                <div class="icon">
                                    <i class="ion ion-ios-speedometer"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-comments-o"></i>
                                <h3 class="box-title">Muro</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                            </div>
                            <div class="box-footer">
                            <form name="formulario" id="formulario" method="POST">
                                <div class="input-group">
                                    <input type="text" name="mensaje" id="mensaje" class="form-control" placeholder="Escriba su mensaje..." required maxlength="80">
                                    <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']; ?>">
                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo $_SESSION['imagen']; ?>">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success" id="btnGuardar">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-info"></i>
                                <h3 class="box-title">¿Que es SIGTSM?</h3>
                            </div>
                            <div class="box-body">
                            <p><b>SIGTSM</b></p>
                            <p align="Justify" ><b>S</b>istema <b>I</b>ntegrado de <b>G</b>estión de la empresa <b>Transport and Services Marine, C.A</b>, garantiza la automatización de los procesos operativos y administrativos dentro de la organización. A su vez permite la optimización de recursos empleados en diversas actividades realizadas por la empresa.</p>
                            <p align="Justify" >SIGTSM fue desarrollado para trabajar bajo entorno Web, con compatibilidad en dispositivos móviles, emplea tecnologías como PHP, JS, SQL, AJAX y MVC.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php
    } else {
    include_once("vistas/modulos/inc/aside.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <link rel="stylesheet" href="vistas/plugins/Ionicons/css/ionicons.min.css">
            <section class="content-header">
                <h1>
                    Bienvenido
                    <small>Sistema Transmarim</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Inicio</a>
                    </li>
                    <li class="active">Escritorio</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3 id="cantS"></h3>
                                <p>Servicios - Tickets</p>
                            </div>
                            <a href="#">
                                <div class="icon">
                                    <i class="ion ion-model-s"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3 id="cantC"></h3>
                                <p>Datos del chofer</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-paper"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>1</h3>
                                <p>Datos del Vehiculo</p>
                            </div>
                            <a href="datosvc">
                                <div class="icon">
                                    <i class="ion ion-ios-speedometer"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>Imprimir</h3>
                                <p>Reportes - Prepagos</p>
                            </div>
                            <a href="imprimirc">
                            <div class="icon">
                                <i class="ion ion-printer"></i>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-comments-o"></i>
                                <h3 class="box-title">Muro</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                            </div>
                            <div class="box-footer">
                            <form name="formulario" id="formulario" method="POST">
                                <div class="input-group">
                                    <input type="text" name="mensaje" id="mensaje" class="form-control" placeholder="Escriba su mensaje..." required maxlength="80">
                                    <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']; ?>">
                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo $_SESSION['imagen']; ?>">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success" id="btnGuardar">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-info"></i>
                                <h3 class="box-title">¿Que es SIGTSM?</h3>
                            </div>
                            <div class="box-body">
                            <p><b>SIGTSM</b></p>
                            <p align="Justify" ><b>S</b>istema <b>I</b>ntegrado de <b>G</b>estión de la empresa <b>Transport and Services Marine, C.A</b>, garantiza la automatización de los procesos operativos y administrativos dentro de la organización. A su vez permite la optimización de recursos empleados en diversas actividades realizadas por la empresa.</p>
                            <p align="Justify" >SIGTSM fue desarrollado para trabajar bajo entorno Web, con compatibilidad en dispositivos móviles, emplea tecnologías como PHP, JS, SQL, AJAX y MVC.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php  
    }
  }
?>
<?php include_once("vistas/modulos/inc/footer.php"); ?>
<!-- SCRIPT UNICOS-->
<script src="vistas/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="vistas/js/escritorio.js"></script> 
<script>
$(document).ready(function () {
    $("#chat-box").slimscroll({
    height: '250px'
    });
    })
</script>
</div>
<?php ob_end_flush(); ?>