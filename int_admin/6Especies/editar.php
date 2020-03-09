<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['desc'];


$especie= new especie();
$reg=$especie->modificaespecie($id, $nombre, $descripcion);
if ($reg){
    require("r_especie.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("e_especie1.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar la especie");';
    print '</script>';  
}

?>

