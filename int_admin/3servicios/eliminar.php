<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$servicio= new servicio();
$reg=$servicio->eliminar($id);
if ($reg){
    require("eli_servicio.php");
    print '<script language="JavaScript">';
    print 'alert("El servicio se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("eli_servicio.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el servicio");';
    print '</script>';  
}

?>
