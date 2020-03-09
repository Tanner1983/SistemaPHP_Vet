<?php

require_once('../../servicio.php'); 

$id = $_POST['idt'];
$id_cl = $_POST['id'];
$id_mas = $_POST['pac'];
$nombre = $_POST['ncliente'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$modo = $_POST['modo'];
$desc = $_POST['desc'];
$problema = $_POST['problema'];
$diagnostico = $_POST['diag'];
$tratamiento = $_POST['trat'];   

$ficha=new ficha();
$reg=$ficha->agregaficha($id_cl, $id_mas, $nombre, $hora, $fecha, $desc, $problema, $diagnostico, $tratamiento);

if ($reg){
    $ticket=new ticket();
    $regt=$ticket->modificamodo($id,$modo);
    
    if($regt){
        require("../0Atenciones/r_atencion.php");
        print '<script language="JavaScript">';
        print 'alert("El cliente se ha creado Correctamente");';
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