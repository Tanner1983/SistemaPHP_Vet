<?php
session_start();
include('../../conectar.php');


if(!isset($_SESSION['nombre']) && !isset($_SESSION['password'])){
    require("../error.php");
    print '<script language="JavaScript">';
    print 'alert("No tiene permisos para acceder a esa pagina");';
    print '</script>';    
} else{   
     $id = $_GET['id'];
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
        <?php
                $query = mysqli_query($link, "SELECT * FROM pt_tbhospital WHERE id_hospital='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
        <div class="formulario">
                     <form action="editar.php" method="POST">
                        <form action="crear.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="id_cl">Id Cliente</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="id_cl" name="id_cl"value="<?php echo $row['id_cl']; ?>" readonly="readonly">
                                <input type="hidden" id="id_ficha" name="id_ficha" value="<?php echo $row['id_ficha']; ?>">
                                <input type="hidden" id="no_mas" name="no_mas" value="<?php echo $row['no_mas']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="fecha">Fecha Ingreso</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fechai" name="fechai" value="<?php $fechai=$row['fein_hospital'];$nfechai=date("d/m/y", strtotime($fechai));echo $nfechai; ?>" readonly="readonly">
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-25">
                                <label for="fecha">Fecha Salida</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fechas" name="fechas" value="<?php $fecha=$row['fesa_hospital'];$nfecha=date("d/m/y", strtotime($fecha));echo $nfecha; ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="obs">Observaciones</label>
                            </div>
                            <div class="col-75">
                                <textarea name="obs"><?php echo $row['obs_hospital']; ?></textarea><br></p>
                            </div>
                        </div>
                        <div class="row">
                            <p>
                                <input type="submit" value="Modificar" name="agregar">
                            </p>                            
                        </div>
                        <div class="row">
                            <p>
                                <input type="reset" value="Limpiar">
                            </p>
                        </div>
                    </form>
                </div> 
        <?php
        }else{
            echo "No hay usuarios para este ID";
        }
        
        ?>
            
        </div>
    </div>
    <?php include('../footer.html');?> 
</div>

</body>
</html>

<?php } ?>