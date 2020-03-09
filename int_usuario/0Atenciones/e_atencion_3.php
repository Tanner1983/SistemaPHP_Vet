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
                $query = mysqli_query($link, "SELECT * FROM pt_tbticket WHERE id_ticket='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
        <div class="formulario">
            <form action="editar.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="id">Id Cliente</label>
                    </div>
                    <div class="col-75">
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id_ticket']; ?>" >
                        <input type="hidden" id="id_mas" name="id_mas" value="<?php echo $row['id_mas']; ?>" >
                        <input type="text" id="id_cl" name="id_cl" value="<?php echo $row['id_cl']; ?>"readonly="readonly" required >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nombre">Nombre Dueño</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nom_cl']; ?>" required>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-25">
                        <label for="nombre">Hora Atencion</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="hora" name="hora" value="<?php $hora=$row['ho_ticket'];$nhora=date("h:i a",strtotime($hora)); echo $nhora; ?>" required>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-25">
                        <label for="descripcion">Fecha </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fecha" name="fecha" value="<?php $fecha=$row['fe_ticket'];$nfecha=date("d/m/y", strtotime($fecha));echo $nfecha; ?>" required>
                    </div>
                </div>                
                <input type="hidden" id="modo" name="modo" value="A">
                <div class="row">
                    <div class="col-25">
                        <label for="descripcion">Descripcion de la visita </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="desc" name="desc" value="<?php echo $row['de_ticket']; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <input type="submit" value="Modificar" name="modificar">
                        <input type="reset" value="Limpiar">
                    </p>                            
                </div>
            </form>
        </div> 
        <?php
        }else{
            echo "No hay usuarios para este ID";
            echo $id;
        }
        
        ?>
        <p>
            <form id="loginform" action="../index.php">    
                <input class="loginbutton" type="submit" value="Volver" />
            </form>   
        </p>
    </div>    
    <?php include('../footer.html');?> 
    </body>
</html>

<?php } ?>

