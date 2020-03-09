<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$especie= new especie();
$reg=$especie->eliminaespecie($id);
if ($reg){
    require("r_especie.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("d_especie.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar la especie");';
    print '</script>';  
}

?>
