<?php
session_start();
include('../../conectar.php');


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
            <link href="../../css/estilo.css" rel="stylesheet" type="text/css">
            <link href="../../css/submenu.css" rel="stylesheet" type="text/css">
            <link href='../../css/form_resp.css' rel='stylesheet' type='text/css'/> 
            <link href='../../css/tabla_resp.css' rel='stylesheet' type='text/css'/> 
    </head>
    <body>
        <div class="container"> 
          <header class="header">
            <a href="../index.php"><img src="../../image/logo.jpg" width="100"></a>  
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
         <?php          
        require_once "../../servicio.php";
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
                    ?><td><img src="../../image/verde.png" width="35"></a><?php    
                    }else{
                        ?><td><img src="../../image/rojo.jpg" width="35"></a><?php    
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
    </div>
    <?php include('../footer.html');?> 
</div>

</body>
</html>

<?php } ?>
