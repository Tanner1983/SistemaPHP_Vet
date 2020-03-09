<?php
session_start();
include('../conectar.php');

if(!isset($_SESSION['nombre']) && !isset($_SESSION['password'])){
    require("../error.php");
    print '<script language="JavaScript">';
    print 'alert("No tiene permisos para acceder a esa pagina");';
    print '</script>';    
} else{   
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veterinaria San Francisco del Maule</title>
            <link href="../css/estilo.css" rel="stylesheet" type="text/css">
            <link href="../css/submenu.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<!-- Main Container -->
        <div class="container"> 
  <!-- Header -->
        <header class="header">
            <a href="../index.php"><img src="../image/logo.jpg" class="logo2"></a>  
            <h4 class="logo">Veterinaria San Francisco del Maule</h4>
            <?php include('menu.html');?>  
        </header>
    
    <section class="intro">
                <div class="lateral">
                    <h3>Menú de administracion</h3>
                        <div class="submenu">
                            <ul class="acorh">
                                <li><a href="usuario/todousuario.php">Usuarios</a>
                                    <ul>
                                        <li><a href="usuario/nvo_usuario.php">Ingresar</a></li>
                                        <li><a href="usuario/edi_usuario.php">Modificar</a></li>
                                        <li><a href="usuario/eli_usuario.php">Eliminar</a></li>
                                        <li><a href="usuario/busqueda.php">Buscar</a></li>
                                    </ul>
                                </li>    
                                <li><a href="3servicios/todoservicio.php">Servicios</a>
                                    <ul>
                                        <li><a href="3servicios/nvo_servicio.php">Ingresar</a></li>
                                        <li><a href="3servicios/edi_servicio.php">Modificar</a></li>
                                        <li><a href="3servicios/eli_servicio.php">Eliminar</a></li>
                                        <li><a href="3servicios/busqueda.php">Buscar</a></li>
                                    </ul>
                                </li>    
                                <li><a href="4Productos/todoproductos.php">Productos</a>
                                    <ul>
                                        <li><a href="4Productos/agregar_producto.php">Ingresar</a></li>
                                        <li><a href="4Productos/editar_producto1.php">Modificar</a></li>
                                        <li><a href="4Productos/eliminar_producto.php">Eliminar</a></li>
                                        <li><a href="4Productos/busqueda.php">Buscar</a></li>
                                    </ul>
                                </li>
                                <li><a href="5Jaulas/r_jaula.php">Jaulas</a>
                                     <ul>
                                         <li><a href="5Jaulas/c_jaula.php">Ingresar</a></li>
                                         <li><a href="5Jaulas/e_jaula.php">Modificar</a></li>
                                         <li><a href="5Jaulas/d_jaula.php">Eliminar</a></li>
                                         <li><a href="5Jaulas/b_jaula.php">Buscar</a></li>
                                    </ul>
                                </li>
                                <li><a href="6Especies/r_especie.php">Especies</a>
                                     <ul>
                                         <li><a href="6Especies/c_especie.php">Ingresar</a></li>
                                         <li><a href="6Especies/e_especie1.php">Modificar</a></li>
                                         <li><a href="6Especies/d_especie.php">Eliminar</a></li>
                                         <li><a href="6Especies/b_especie.php">Buscar</a></li>
                                    </ul>
                                </li> 
                                <li><a href="7Razas/r_raza.php">Razas</a>
                                     <ul>
                                         <li><a href="7Razas/c_raza.php">Ingresar</a></li>
                                         <li><a href="7Razas/e_raza1.php">Modificar</a></li>
                                         <li><a href="7Razas/d_raza.php">Eliminar</a></li>
                                         <li><a href="7Razas/b_raza.php">Buscar</a></li>
                                    </ul>
                                </li> 
                                <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
                            </ul>    
                        </div>   
                </div>
                <div class="principal">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                </div>
            </section>
    <div class="gallery" align="left">           
        
    </div>
    <?php include('footer.html');?> 
</div>

</body>
</html>

<?php } ?>