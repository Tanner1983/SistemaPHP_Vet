<?php

require_once('../../servicio.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$desc = $_POST['desc'];

$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/ProyectoTitulo/int_admin/uploads/';
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}

$servicio= new servicio();
$reg=$servicio->registro($id, $nombre, $precio, $desc, $nombre_img);
if ($reg){
    require("nvo_servicio.php");
    print '<script language="JavaScript">';
    print 'alert("El servicio se ha creado Correctamente");';
    print '</script>';    
}else{
    require("nvo_servicio.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el servicio");';
    print '</script>';  
}

?>