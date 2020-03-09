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
        <h3>Ingrese parametros para realizar busqueda: </h3>
        <form method="POST" action="b_cliente2.php" class="formulario"> 
            <div class="row">
                <div class="col-25">
                    <label>Palabra clave:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="palabra" required>
                </div>
                </div>
            <div class="row">
                <div class="col-25">
                    <label for="tipo">Busqueda por: </label>
                </div>
                    <div class="col-75">
                        <select id="tipo" name="tipo" required>                            
                            <option value="id_cl">Rut</option>
                            <option value="no_cl">Nombre</option>                           
                            <option value="di_cl">Direccion</option>
                            <option value="co_cl">Comuna</option>
                            <option value="ci_cl">Ciudad</option>
                            <option value="fo_cl">Telefono</option>
                            <option value="fe_cl">FEcha Inscripcion</option>
                        </select>
                    </div>
            </div>    
            <div class="row">
                <p>
                    <input type="submit" value="Buscar" name="buscador">
                </p>                            
            </div>
        </form> 
        
    </div>
    <?php include('../footer.html');?> 
</div>

</body>
</html>

<?php } ?>
