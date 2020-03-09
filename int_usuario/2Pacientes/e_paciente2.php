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
                $query = mysqli_query($link, "SELECT p.*, r.*, e.* FROM pt_tbpaciente p INNER JOIN pt_tbrazas r ON p.id_raza = r.id_raza INNER JOIN pt_tbespecie e ON r.id_especie = e.id_especie WHERE id_mas='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
                <div class="formulario">
                             <form action="editar.php" method="POST">
                                <div class="row">
                    <div class="col-25">
                        <label>Rut Cliente: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="rut" name="rut" value="<?php echo $row['id_cl'];?>" readonly="readonly"> 
                    </div>
                </div>    
                <div class="row">
                    <div class="col-25">
                        <label>Nombres Mascota: </label>
                    </div>
                    <div class="col-75">
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id_mas']; ?>" >
                        <input type="text" id="nombre" name="nombre" value="<?php echo $row['no_mas']; ?>" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Especie: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nombre" name="especie" value="<?php echo $row['id_especie']."-". $row['nom_especie']; ?>" readonly="readonly" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Raza: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nombre" name="raza" value="<?php echo $row['id_raza']."-". $row['nom_raza']; ?>" readonly="readonly" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Color: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="color" name="color" value="<?php echo $row['co_mas']; ?>" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>N° de Chip: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="chip" name="chip" value="<?php echo $row['nc_mas']; ?>" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Edad: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="edad" name="edad" value="<?php echo $row['ed_mas']; ?>" required> <label>años</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Peso: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="peso" name="peso" value="<?php echo $row['pe_mas']; ?>" required> <label>kg</label>
                    </div>
                </div> 
               <div class="row">
                    <div class="col-25">
                        <label>Genero: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="genero" name="genero" value="<?php echo $row['ge_mas']; ?>" required>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-25">
                        <label>Observaciones: </label>
                    </div>
                    <div class="col-75">
                        <textarea name="obs" rows="10" cols="50" value="<?php echo $row['ob_mas']; ?>"></textarea>                
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