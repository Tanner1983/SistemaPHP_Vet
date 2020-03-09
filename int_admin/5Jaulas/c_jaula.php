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
                                <label for="medida">Medida en cms</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="alto" name="alto" placeholder="Ingrese Alto.." required><input type="text" id="largo" name="largo" placeholder="Largo.." required><input type="text" id="ancho" name="ancho" placeholder="Ingrese Ancho.." required>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-25">
                                <label for="disp">Disponibilidad </label>
                            </div>
                            <div class="col-75">
                                <Select class="disp" name=disp required/>
                                    <option>Seleccione SI/NO</option>
                                    <option value="0">SI</option>
                                    <option value="1">NO</option>                                    
                                </select>
                            </div>
                        </div>      
                        <div class="row">
                            <div class="col-25">
                                <label for="medida">Descripcion</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="desc" name="desc" placeholder="Ingrese Descripcion.." required>
                            </div>
                        </div>                                            
                        <div class="row">
                            <p>
                                <input type="submit" value="Ingresar" name="agregar">
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