<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$producto= new producto();
$reg=$producto->eliminaproducto($id);
if ($reg){
    require("todoproductos.php");
    print '<script language="JavaScript">';
    print 'alert("El servicio se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("todoproductos.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el servicio");';
    print '</script>';  
}

?>
