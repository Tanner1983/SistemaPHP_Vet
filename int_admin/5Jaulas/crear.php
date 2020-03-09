<?php

require_once('../../servicio.php'); 

$alto = $_POST['alto'];
$largo = $_POST['largo'];
$ancho = $_POST['ancho'];
$medida = $alto."x".$largo."x".$ancho;
$disponible= $_POST['disp'];
$descripcion = $_POST['desc'];

$jaula= new jaula();
$reg=$jaula->agregajaula($medida, $disponible, $descripcion);

if ($reg){
    require("r_jaula.php");
    print '<script language="JavaScript">';
    print 'alert("La Jaula se ha creado Correctamente");';
    print '</script>';    
}else{
    require("c_jaula.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear la jaula");';
    print '</script>';  
}

?>