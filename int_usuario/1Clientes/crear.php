<?php

require_once('../../servicio.php'); 

$id = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dir = $_POST['dir'];
$comuna = $_POST['comuna'];
$ciudad = $_POST['ciudad'];
$fono = $_POST['fono'];
$mail = $_POST['mail'];
$fechar = $_POST['fecha'];

$cliente= new cliente();
$reg=$cliente->agregacl($id, $nombre, $apellido, $dir, $comuna, $ciudad, $fono, $mail, $fechar);
if ($reg){
    require("../2Pacientes/c_paciente.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha creado Correctamente");';
    print '</script>';    
}else{
    require("c_cliente.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el cliente");';
    print '</script>';  
}

?>