<?php

require_once('../../servicio.php'); 


$nombre = $_POST['nombre'];
$desc = $_POST['desc'];

$especie= new especie();
$reg=$especie->agregaespecie($nombre, $desc);
if ($reg){
    require("r_especie.php");
    print '<script language="JavaScript">';
    print 'alert("La especie se ha creado Correctamente");';
    print '</script>';    
}else{
    require("c_especie.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear la especie");';
    print '</script>';  
}

?>