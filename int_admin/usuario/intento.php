<?php
include('../../conectar.php');

$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['pass'];
$mail = $_POST['email'];
$tipo = $_POST['tipo'];

 
if(isset($_POST['agregar'])){
       $query = mysqli_query($link, "INSERT INTO pt_tbusuario (id_usuario, nom_usuario, ape_usuario, pas_usuario, ema_usuario, tip_usuario)"
       . "VALUES('$rut','$nombre','$apellido','$pass','$mail','$tipo')");   



        if($query == TRUE){
            require("nvo_usuario.php");
            print '<script language="JavaScript">';
            print 'alert("El usuario se ha creado Correctamente");';
            print '</script>';    
        }else{
            require("nvo_usuario.php");
            print '<script language="JavaScript">';
            print 'alert("Ha ocurrido un problema al crear el usuario");';
            print '</script>';  
        }
}
    
     
if(isset($_POST['modificar'])){
    $query = mysqli_query($link, "UPDATE pt_tbusuario SET nom_usuario='$nombre', ape_usuario='$apellido', pas_usuario='$pass', ema_usuario='$mail', tip_usuario='$tipo' WHERE id_usuario='$rut'");

    if($query == TRUE){
        require("edi_usuario.php");
        print '<script language="JavaScript">';
        print 'alert("El usuario se ha modificado correctamente");';
        print '</script>';    
    }else{
        require("edi_usuario.php");
        print '<script language="JavaScript">';
        print 'alert("Ha ocurrido un problema al editar el usuario");';
        print '</script>';  
    }
}

    

?>


