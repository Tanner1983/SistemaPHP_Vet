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
                $query = mysqli_query($link, "SELECT * FROM pt_tbcliente WHERE id_cl='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
        <div class="formulario">
                     <form action="editar.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="id">Rut Cliente</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="id" name="id" value="<?php echo $row['id_cl']; ?>" maxlength="10" readonly="readonly" required >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="nombre">Nombres</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="nombre" name="nombre" value="<?php echo $row['no_cl']; ?>" required>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-25">
                                <label for="nombre">Apellidos</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="apellido" name="apellido" value="<?php echo $row['ap_cl']; ?>" required>
                            </div>
                        </div>  
                         
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Direccion </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="dir" name="dir" value="<?php echo $row['di_cl']; ?>"required>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Comuna </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="comuna" name="comuna" value="<?php echo $row['co_cl']; ?>"required>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Ciudad </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="ciudad" name="ciudad" value="<?php echo $row['ci_cl']; ?>"required>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Telefono </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fono" name="fono" value="<?php echo $row['fo_cl']; ?>"required>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Correo Electronico </label>
                            </div>
                            <div class="col-75">
                                <input type="email" id="mail" name="mail" value="<?php echo $row['ma_cl']; ?>"required>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="descripcion">Fecha de Inscripcion </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fecha" name="fecha" value="<?php echo $row['fe_cl']; ?>" readonly="readonly" required>
                            </div>
                        </div>   
                        <div class="row">
                            <p>
                                <input type="submit" value="Modificar" name="agregar">
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