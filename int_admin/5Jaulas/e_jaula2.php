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
                $query = mysqli_query($link, "SELECT * FROM pt_tbjaula WHERE id_jaula='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
        <div class="formulario">
                     <form action="editar.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="id">Id Jaula</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="id" name="id" value="<?php echo $row['id_jaula']; ?>"  readonly="readonly" required >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="medida">Medida en cms</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="medida" name="medida" value="<?php echo $row['med_jaula']; ?>" required>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-25">
                                <label for="disp">Disponibilidad </label>
                            </div>
                            <div class="col-75">
                                <Select class="disp" name=disp required/>
                                    <option>Seleccione SI/NO</option>
                                    <option value="S">SI</option>
                                    <option value="N">NO</option>                                    
                                </select>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-25">
                                <label for="medida">Descripcion</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="desc" name="desc" value="<?php echo $row['des_jaula']; ?>" required>
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