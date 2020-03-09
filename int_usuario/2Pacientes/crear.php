<?php

require_once('../../servicio.php'); 

$id_cl = $_POST['rut'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$color = $_POST['color'];
$chip = $_POST['chip'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$obs = $_POST['obs'];

$paciente= new paciente();
$reg=$paciente->agregapac($id_cl, $nombre, $especie, $raza, $color, $chip, $edad, $peso, $genero, $obs);
if ($reg){    
    print '<script type="text/javascript">';
    print 'alert("El Paciente se ha creado Correctamente");';
    print 'window.close();';  
    print '</script>';    
    require("../0Atenciones/nva_atencionp2.php");
}else{    
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el paciente");';
    print 'window.close();';    
    print '</script>';  
    require("../2Pacientes/c_paciente.php");
}

?>