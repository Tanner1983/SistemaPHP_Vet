<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$cliente= new cliente();
$reg=$cliente->eliminacl($id);
if ($reg){
    require("r_cliente.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("d_cliente.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el cliente");';
    print '</script>';  
}

?>
