<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$id_cl = $_POST['id_cl'];
$id_mas = $_POST['id_mas'];
$nombre = $_POST['nombre'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$modo = $_POST['modo'];
$desc = $_POST['desc'];


$ticket= new ticket();
$reg=$ticket->modificaticket($id, $id_cl, $id_mas, $nombre, $hora, $fecha, $modo, $desc);
if ($reg){
    require("r_atencion.php");
    print '<script language="JavaScript">';
    print 'alert("El paciente se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("e_atencion_1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar el paciente");';
    print '</script>';  
}

?>

