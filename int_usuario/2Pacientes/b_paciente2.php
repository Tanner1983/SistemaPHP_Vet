<?php
session_start();
include('../../conectar.php');


if(!isset($_SESSION['nombre']) && !isset($_SESSION['password'])){
    require("../../error.php");
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
            <link href="../../css/estilo.css" rel="stylesheet" type="text/css">
            <link href="../../css/submenu.css" rel="stylesheet" type="text/css">
            <link href='../../css/form_resp.css' rel='stylesheet' type='text/css'/> 
    </head>
    <body>
<!-- Main Container -->
        <div class="container"> 
  <!-- Header -->
        <header class="header">
            <a href="../../index.php"><img src="../../image/logo.jpg" width="100"></a>  
            <h4 class="logo">Veterinaria San Francisco del Maule</h4>
            <?php include('../menu.html');?>  
        </header>
    
    <section class="intro">
        <?php include('../lateral.html');?>                 
            <div class="column">
                    <br>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
        </section>
    <div class="gallery" align="left">    
        <h3>Resultados de la Busqueda : </h3>
        <?php

            require_once('../../servicio.php');

            $buscar = $_POST['palabra'];
            $tipo = $_POST['tipo'];
            
            $busca=new paciente();
            $resp=$busca->buscapac($tipo, $buscar);
            if ($resp){?>
                <table align="center">
                        <thead>
                            <tr>
                                <td>ID Dueño</td>
                                <td>Nombre</td>   
                                <td>Especie</td>  
                                <td>Raza</td>
                                <td>Color</td>
                                <td>N° Chip</td>
                                <td>Edad</td>
                                <td>Peso</td>
                                <td>Genero</td>
                            </tr>
                        </thead>
                        <tbody>
                <?php foreach ($resp as $row):?>                    
                        
                            <tr>
                                <td><?php echo $row['id_cl']; ?></td>
                                <td><?php echo $row['no_mas']; ?></td>
                                <td><?php echo $row['id_especie']; ?></td>
                                <td><?php echo $row['id_raza']; ?></td>
                                <td><?php echo $row['co_mas']; ?></td>
                                <td><?php echo $row['nc_mas']; ?></td>
                                <td><?php echo $row['ed_mas']; ?></td>
                                <td><?php echo $row['pe_mas']; ?></td>
                                <td><?php echo $row['ge_mas']; ?></td>                   
                            </tr>                         
                   
                <?php endforeach ;
        }else{
            print '<script language="JavaScript">';
            print 'alert("No se ha encontrado...");';
            print '</script>';  
        }            
        ?>                  
            </tbody>
        </table>
        </div>   
        <form id="loginform" action="b_paciente.php">    
            <input class="loginbutton" type="submit" value="Volver" />
        </form>  
    </div>
    <?php include('../footer.html');?> 
</body>
</html>

<?php } ?>