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
        <div class="container"> 
  
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
                                <li><a href="0Atenciones/r_atencion.php">Atenciones</a>
                                    <ul>
                                        <li><a href="0Atenciones/nva_atencion.php">Ingresar</a></li>
                                        <li><a href="0Atenciones/e_atencion_1.php">Modificar/Eliminar</a></li>                                        
                                        <li><a href="0Atenciones/b_atencion.php">Buscar</a></li>
                                    </ul>
                                </li>  
                                <li><a href="1Clientes/r_cliente.php">Clientes</a>
                                    <ul>
                                        <li><a href="1Clientes/c_cliente.php">Ingresar</a></li>
                                        <li><a href="1Clientes/e_cliente1.php">Modificar</a></li>
                                        <li><a href="1Clientes/d_cliente.php">Eliminar</a></li>
                                        <li><a href="1Clientes/b_cliente.php">Buscar</a></li>
                                    </ul>
                                </li>  
                                <li><a href="2Pacientes/r_paciente.php">Pacientes</a>
                                    <ul>
                                        <li><a href="2Pacientes/c_paciente.php">Ingresar</a></li>
                                        <li><a href="2Pacientes/e_paciente1.php">Modificar</a></li>
                                        <li><a href="2Pacientes/d_paciente.php">Eliminar</a></li>
                                        <li><a href="2Pacientes/b_paciente.php">Buscar</a></li>
                                    </ul>
                                </li>  
                                <li><a href="3servicios/todoservicio.php">Servicios</a>
                                    <ul>                                        
                                        <li><a href="3servicios/busqueda.php">Buscar</a></li>
                                    </ul>
                                </li>    
                                <li><a href="4Productos/todoproductos.php">Productos</a>
                                    <ul>                                        
                                        <li><a href="4Productos/busqueda.php">Buscar</a></li>
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