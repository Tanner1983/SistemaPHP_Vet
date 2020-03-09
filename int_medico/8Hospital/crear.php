<?php

require_once('../../servicio.php'); 

$id_cl = $_POST['id_cl'];
$id_ficha = $_POST['id_ficha'];
$no_mas = $_POST['no_mas'];
$fechai = $_POST['fechai'];
$fechas = $_POST['fechas'];
$obs = $_POST['obs'];

$hospital=new hospital();
$reg=$hospital->agregahospital($id_cl, $id_ficha, $no_mas, $fechai, $fechas, $obs);


    
    if($reg){
        require("r_hospital.php");
        print '<script language="JavaScript">';
        print 'alert("El registro se ha creado Correctamente");';
        print '</script>';
    }else{
        require("c_hospital.php");
        print '<script language="JavaScript">';
        print 'alert("Ha ocurrido un problema al finalizar el Registro!");';
        print '</script>'; 
    }


?>