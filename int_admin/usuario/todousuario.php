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
<!-- Main Container -->
        <div class="container"> 
  <!-- Header -->
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
        $query = mysqli_query($link, "SELECT * FROM pt_tbusuario");
        $count = mysqli_num_rows($query);
        echo "<h2 class='title'>Total de Usuarios: ".$count."</h2>";
        ?>
        <div>
        <table align="center">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>apellido</td>
                    <td>Password</td>
                    <td>e-mail</td>
                    <td>tipo</td>                    
                </tr>
            </thead>
            <tbody>
        <?php
        while($row = mysqli_fetch_assoc($query)){
        ?>
                
             <tr>
                    <td><?php echo $row['id_usuario']; ?></td>
                    <td><?php echo $row['nom_usuario']; ?></td>
                    <td><?php echo $row['ape_usuario']; ?></td>
                    <td><?php echo $row['pas_usuario']; ?></td>
                    <td><?php echo $row['ema_usuario']; ?></td>
                    <td><?php echo $row['tip_usuario']; ?></td>                    
                </tr>   
                
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