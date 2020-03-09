<?php

require_once('../../servicio.php');

$id = $_GET['id'];


$ficha= new ficha();
$reg=$ficha->eliminaficha($id);

if ($reg){
    require("r_ficha.php");
    print '<script language="JavaScript">';
    print 'alert("El cliente se ha eliminado Correctamente");';
    print '</script>';    
}else{
    require("e_ficha1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el cliente");';
    print '</script>';  
}

?>
