<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$cliente= new paciente();
$reg=$cliente->eliminapac($id);
if ($reg){
    require("r_paciente.php");
    print '<script language="JavaScript">';
    print 'alert("El paciente se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("d_paciente.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el paciente");';
    print '</script>';  
}

?>
