<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$hospital= new hospital();
$reg=$hospital->eliminahospital($id);

if ($reg){
    require("r_hospital.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("e_hospital1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el cliente");';
    print '</script>';  
}

?>
