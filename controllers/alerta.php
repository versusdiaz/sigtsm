<?php
require_once("../modelos/Alerta.php");

$alerta = new Alerta();

/*INICIALIZO VARIABLES*/

$hoy = date('Y/m/d');
//$grado=isset($_POST['grado'])? limpiarCadena($_POST['grado']):"";
//
//$fechaven=isset($_POST['fechaven'])? limpiarCadena($_POST['fechaven']):"";
//
//$idlicencia=isset($_POST['idlicencia'])? limpiarCadena($_POST['idlicencia']):"";


switch ($_GET["op"]){
        
    case 'listarAlert':
        $rspta = $alerta->listarAlert();
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "0"=>$reg->cedula,
               "1"=>$reg->nombre,
               "2"=>"<button onclick='mostrar(".$reg->idchofer.")' id='btnAgregarArt' type='button'class='btn btn-warning btn-block btn-social' style='text-align:center;'><span class='fa fa-exclamation'></span>Notificar Alerta</button>"
           );
        }
        /*CARGAMOS LA DATA EN LA VARIABLE USADA PARA EL DATATABLE*/
        $results = array(
 			"sEcho"=>1, //Informacion para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
        echo json_encode($results);
    break;
        
        case 'verAlertlicencia':
        $rspta = $alerta->listAlertLicencia($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "nombre"=>$reg->nombre,
               "vencimiento"=>$reg->vencimiento
           );
        }
        /*CARGAMOS LA DATA EN LA VARIABLE USADA PARA EL DATATABLE*/
        echo json_encode($data);
    break;
    
        case 'verAlertlicenciaV':
        $rspta = $alerta->listAlertLicenciaV($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "nombre"=>$reg->nombre
           );
        }
        /*CARGAMOS LA DATA EN LA VARIABLE USADA PARA EL DATATABLE*/
        echo json_encode($data);
    break;

        case 'verAlertSeguro':
        $rspta = $alerta->listAlertSeguro($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "placa"=>$reg->placa,
               "vencimiento"=>$reg->vencimiento
           );
        }
        echo json_encode($data);
    break;
        
        case 'verAlertSeguroV':
        $rspta = $alerta->listAlertSeguroV($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "placa"=>$reg->placa
           );
        }
        echo json_encode($data);
    break;

        case 'verAlertCertificado':
        $rspta = $alerta->listAlertCertificado($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "nombre"=>$reg->nombre,
               "vencimiento"=>$reg->vencimiento
           );
        }
        echo json_encode($data);
    break;
        
        case 'verAlertCertificadoV':
        $rspta = $alerta->listAlertCertificadoV($hoy);
        $data = Array();
        while($reg = $rspta->fetch_object()){
           $data[]=array(
               "nombre"=>$reg->nombre
           );
        }
        echo json_encode($data);
    break;

        
}
