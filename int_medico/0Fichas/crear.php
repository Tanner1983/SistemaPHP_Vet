<?php

require_once('../../servicio.php'); 

$id = $_POST['idt'];
$id_cl = $_POST['id_cl'];
$no_mas = $_POST['pac'];
$nombre = $_POST['ncliente'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$modo = $_POST['modo'];
$problema = $_POST['problema'];
$diagnostico = $_POST['diag'];
$tratamiento = $_POST['trat'];   
$obs = $_POST['obs']; 

$ficha=new ficha();
$reg=$ficha->agregaficha($id_cl, $no_mas, $nombre, $hora, $fecha, $problema, $diagnostico, $tratamiento, $obs);

if ($reg){
    $ticket=new ticket();
    $regt=$ticket->modificamodo($id,$modo);
    
    if($regt){
        require("r_ficha_H.php");
        print '<script language="JavaScript">';
        print 'alert("El registro se ha creado Correctamente");';
        print '</script>';
    }else{
        require("r_ficha.php");
        print '<script language="JavaScript">';
        print 'alert("Ha ocurrido un problema al finalizar el Registro!");';
        print '</script>'; 
    }
}else{
    require("r_ficha.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el Registro!");';
    print '</script>';  
}

?>