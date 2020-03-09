<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$ticket= new ticket();
$reg=$ticket->eliminaticket($id);
if ($reg){
    require("r_atencion.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("e_atencion_2.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el cliente");';
    print '</script>';  
}

?>
