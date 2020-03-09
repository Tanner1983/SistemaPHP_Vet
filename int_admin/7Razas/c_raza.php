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

        <div class="container">   
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
        <h2>Ingrese Raza</h2>
        <div class="formulario">
                     <form action="crear.php" method="POST">                       
                        <div class="row">
                            <div class="col-25">
                                <label for="nombre">Nombre Raza</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre.." required>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-25">
                                <label for="tamano">Tamaño Raza </label>
                            </div>
                            <div class="col-75">
                                <Select class="tamano" name=tamano required/>
                                    <option>Seleccione tamaño</option>
                                    <option value="toy">Toy / Enano</option>
                                    <option value="pequeno">Pequeño</option>
                                    <option value="mediano">Mediano</option>
                                    <option value="grande">Grande</option>
                                    <option value="gigante ">Gigante</option>
                                </select>
                            </div>
                        </div>      
                        <div class="row">
                            <div class="col-25">
                                <label for="especie">ID especie </label>
                            </div>
                            <div class="col-75">
                                <Select class="especie" name=especie required/> 
                                    <option>Seleccione Especie..</option>
                                    <?php
                                    $query = mysqli_query($link, "SELECT * FROM pt_tbespecie");
                                    while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <option value="<?php echo $row['id_especie']?>">
                                    <?php echo $row['nom_especie'];?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>                                             
                        <div class="row">
                            <p>
                                <input type="submit" value="Ingresar" name="agregar">
                            </p>                            
                        </div>
                        <div class="row">
                            <p>
                                <input type="reset" value="Limpiar">
                            </p>
                        </div>
                    </form>
                </div>        
        </div>
    </div>
    <?php include('../footer.html');?> 
</div>

</body>
</html>

<?php } ?>