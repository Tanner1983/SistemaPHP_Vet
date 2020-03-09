<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dir = $_POST['dir'];
$comuna = $_POST['comuna'];
$ciudad = $_POST['ciudad'];
$fono = $_POST['fono'];
$mail = $_POST['mail'];
$fechar = $_POST['fecha'];


$cliente= new cliente();
$reg=$cliente->modificacl($id, $nombre, $apellido, $dir, $comuna, $ciudad, $fono, $mail, $fechar);
if ($reg){
    require("r_cliente.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("e_cliente1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar el cliente");';
    print '</script>';  
}

?>

