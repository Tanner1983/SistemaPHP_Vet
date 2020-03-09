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
        $usuarioModel = new ficha();
        $reg = $usuarioModel->listaficha();
        if ($reg){        
        ?>
        <div><br>
        <table align="center">
            <thead>
                <tr>
                    <td>IDentificador</td>
                    <td>Rut Cliente </td>  
                    <td>Nombre</td> 
                    <td>Paciente</td>
                    <td>Problema</td>
                    <td>Diagnostico</td>
                    <td>Tratamiento</td>
                    <td>Observaciones</td>
                    <td>Hospitalizacion</td>
                </tr>
            </thead>
            <tbody>
        <?php
            foreach ($reg as $row):
        ?>                
             <tr>
                    <td><?php echo $row['id_ficha']; ?></td>
                    <td><?php echo $row['id_cl']; ?></td>
                    <td><?php echo $row['nom_cl']; ?></td>
                    <td><?php echo $row['no_mas']; ?></td> 
                    <td><?php echo $row['pro_ficha']; ?></td>
                    <td><?php echo $row['dia_ficha']; ?></td>
                    <td><?php echo $row['tra_ficha']; ?></td>
                    <td><?php echo $row['obs_ficha']; ?></td>
                    <td>
                        <a href="../8Hospital/c_hospital.php?id=<?php echo $row['id_ficha']; ?>" onclick="return confirmation()"><img src="../../image/hospital.png" width="35"></a>
                    </td>
                
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
