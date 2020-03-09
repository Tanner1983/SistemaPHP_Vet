<?php

require_once('../../servicio.php');

$id = $_POST['idt'];
$id_cl = $_POST['id_cl'];
$no_mas = $_POST['pac'];
$nombre = $_POST['ncliente'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$problema = $_POST['problema'];
$diagnostico = $_POST['diag'];
$tratamiento = $_POST['trat'];   
$obs = $_POST['obs']; 


$ficha= new ficha();
$reg=$ficha->modificaficha($id, $id_cl, $no_mas, $nombre, $hora, $fecha, $problema, $diagnostico, $tratamiento, $obs);
if ($reg){
    require("e_ficha1.php");
    print '<script language="JavaScript">';
    print 'alert("La ficha se ha modificado Correctamente");';
    print '</script>';    
}else{
    require("r_ficha.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al modificar la ficha");';
    print '</script>';  
}

?>

