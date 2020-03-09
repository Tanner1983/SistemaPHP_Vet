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
                                <li><a href="../int_medico/0Fichas/r_fichas.php">Ficha Pacientes</a>
                                    <ul>
                                        <li><a href="../int_medico/0Fichas/e_ficha1.php">Modificar/Eliminar</a></li>
                                        <li><a href="../int_medico/0Fichas/b_ficha.php">Buscar</a></li>
                                        <li><a href="../int_medico/0Fichas/i_ficha.php">Imprimir</a></li>
                                    </ul>
                                </li>   
                                <li><a href="../int_medico/8Hospital/r_hospital.php">Hospitalizaciones</a>
                                    <ul>
                                        <li><a href="../int_medico/8Hospital/r_ficha_H.php">Ingresar</a></li>
                                        <li><a href="../int_medico/8Hospital/e_hospital1.php">Modificar/Eliminar</a></li>
                                        <li><a href="../int_medico/8Hospital/b_hospital.php">Buscar</a></li>
                                    </ul>
                                </li>   
                                <li><a href="../int_medico/1Clientes/r_cliente.php">Clientes</a>
                                    <ul>
                                        <li><a href="../int_medico/1Clientes/b_cliente.php">Buscar</a></li>
                                    </ul>
                                </li>    
                                <li><a href="../int_medico/3servicios/todoservicio.php">Servicios</a></li>    
                                <li><a href="../int_medico/4Productos/todoproductos.php">Productos</a></li>
                                <li><a href="../int_medico/5Jaulas/r_jaula.php">Jaulas</a>
                                     <ul>                                         
                                         <li><a href="../int_medico/5Jaulas/b_jaula.php">Buscar</a></li>
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
         <?php          
        require_once "../servicio.php";
        $usuarioModel = new ticket();
        $reg = $usuarioModel->listaticket();
        if ($reg){        
        ?>
        <div><br>
        <table align="center">
            <thead>
                <tr>
                    <td>Estado</td> 
                    <td>N° de ticket</td>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Cliente</td>  
                    <td>Paciente</td>                      
                    <td>Motivo de la visita</td>
                </tr>
            </thead>
            <tbody>
        <?php
            foreach ($reg as $row):
        ?>                
             <tr>
                    <?php if($row['modo_ticket']=='A'){
                        ?><td><a href="0Fichas/c_ficha.php?id=<?php echo $row['id_ticket']; ?>"> <img src="../image/verde.png" width="35"></a><?php    
                    }else{
                        ?><td><img src="../image/rojo.jpg" width="35"></a><?php    
                    }?>
                    <td><?php echo $row['id_ticket']; ?></td>
                    <td><?php $fecha=$row['fe_ticket'];$nfecha=date("d/m/y", strtotime($fecha));echo $nfecha;?></td>
                    <td><?php $hora=$row['ho_ticket'];$nhora=date("h:i a",strtotime($hora)); echo $nhora;?></td>
                    <td><?php echo $row['nom_cl']; ?></td>   
                    <td><?php echo $row['id_mas']; ?></td>  
                    <td><?php echo $row['de_ticket']; ?></td>
                </tr>  
            <?php
                endforeach;
            ?>    
                
        <?php } ?>
            </tbody>
        </table>
        </div>    
        <br>
        <form id="loginform" action="../index.php">    
    
            <input class="loginbutton" type="submit" value="Volver" />
    
        </form>
            
        </div>
    <?php include('footer.html');?> 
</div>

</body>
</html>

<?php } ?>