<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$jaula= new jaula();
$reg=$jaula->eliminajaula($id);
if ($reg){
    require("r_jaula.php");
    print '<script language="JavaScript">';
    print 'alert("La jaula se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("d_jaula.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar la jaula");';
    print '</script>';  
}

?>
