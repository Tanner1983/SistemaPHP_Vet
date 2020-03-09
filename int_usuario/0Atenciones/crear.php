<?php

require_once('../../servicio.php'); 

$id_cl = $_POST['id'];
$id_mas = $_POST['paciente'];
$nombre = $_POST['nombre'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$modo = $_POST['modo'];
$desc = $_POST['desc'];


$ticket= new ticket();
$reg=$ticket->agregaticket($id_cl, $id_mas, $nombre, $hora, $fecha, $modo, $desc);
if ($reg){    
    require("r_atencion.php");
    print '<script language="JavaScript">';
    print 'alert("El ticket se ha creado Correctamente");';
    print '</script>';    
}else{
    require("nva_atencion.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el ticket");';
    print '</script>';  
}

?>