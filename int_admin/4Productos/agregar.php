<?php

require_once('../../servicio.php'); 

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipop =  $_POST['tipo'];
$marca = $_POST['marca'];
$desc = $_POST['desc'];
$pc = $_POST['pc'];
$pv = $_POST['pv'];
$fecha = $_POST['fc'];
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/ProyectoTitulo/int_admin/uploads/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}

$producto= new producto();
$reg=$producto->agregaproducto($id, $nombre, $tipop, $marca, $desc, $pc, $pv, $fecha, $nombre_img);

if ($reg){
    require("agregar_producto.php");
    print '<script language="JavaScript">';
    print 'alert("El Producto se ha creado Correctamente");';
    print '</script>';    
}else{
    require("agregar_producto.php");
    print '<script language="JavaScript">';
    print 'alert("Ha ocurrido un problema al crear el Producto");';
    print '</script>';  
}


?>