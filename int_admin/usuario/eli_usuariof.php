<?php
include('../../conectar.php');

$id=$_GET['id'];



$query = mysqli_query($link, "DELETE FROM pt_tbusuario WHERE id_usuario='$id'");

if($query == TRUE){
    require("eli_usuario.php");
    print '<script language="JavaScript">';
    print 'alert("El usuario se ha eliminado correctamente");';
    print '</script>';    
}else{
    require("eli_usuario.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al eliminar el usuario");';
    print '</script>';  
}