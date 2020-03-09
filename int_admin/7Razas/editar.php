<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tamano = $_POST['tamano'];
$especie = $_POST['especie'];


$raza= new razas();
$reg=$raza->modificaraza($id, $nombre, $tamano, $especie);
if ($reg){
    require("r_raza.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("e_raza1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar la especie");';
    print '</script>';  
}

?>

