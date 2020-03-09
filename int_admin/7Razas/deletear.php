<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$raza= new razas();
$reg=$raza->eliminaraza($id);
if ($reg){
    require("r_raza.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("d_raza.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar la especie");';
    print '</script>';  
}

?>
