<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$id_cl = $_POST['rut'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$color = $_POST['color'];
$nchip = $_POST['chip'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$obs = $_POST['obs'];

$paciente= new paciente();
$reg=$paciente->modificapac($id, $id_cl, $nombre, $especie, $raza, $color, $nchip, $edad, $peso, $genero, $obs);
if ($reg){
    require("r_paciente.php");
    print '<script language="JavaScript">';
    print 'alert("El paciente se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("e_paciente.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar el paciente");';
    print '</script>';  
}

?>

