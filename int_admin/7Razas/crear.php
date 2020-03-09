<?php

require_once('../../servicio.php'); 


$nombre = $_POST['nombre'];
$tamano= $_POST['tamano'];
$especie = $_POST['especie'];

$raza= new razas();
$reg=$raza->agregaraza($nombre, $tamano, $especie);

if ($reg){
    require("r_raza.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha creado Correctamente");';
    print '</script>';    
}else{
    require("c_raza.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear la especie");';
    print '</script>';  
}

?>