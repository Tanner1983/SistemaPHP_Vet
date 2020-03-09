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
        <div class="formulario">
                     <form action="intento.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="rut">Rut Usuario</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT" maxlength="10">                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="apellido">Apellido</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="apellido" name="apellido" placeholder="Ingrese Apellido.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="pass">Password</label>
                            </div>
                            <div class="col-75">
                                <input type="password" id="pass" name="pass" placeholder="Ingrese Contraseña.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="email">Correo Electronico</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" placeholder="Ingrese E-mail.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="tipo">Tipo de usuario</label>
                            </div>
                            <div class="col-75">
                                <select id="tipo" name="tipo" required>
                                    <option value="1">Administrador</option>
                                    <option value="2">Secretaria</option>
                                    <option value="3">Medico</option>
                                    <option value="4">Especial</option>
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
        <script type="text/javascript">
            function checkRut(rut) {
                var valor = rut.value.replace('.','');
                valor = valor.replace('-','');            
                cuerpo = valor.slice(0,-1);
                dv = valor.slice(-1).toUpperCase();
                rut.value = cuerpo + '-'+ dv
                if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}

                    suma = 0;
                    multiplo = 2;
                    for(i=1;i<=cuerpo.length;i++) {
                        index = multiplo * valor.charAt(cuerpo.length - i);
                        suma = suma + index;
                        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
                    }            
                    dvEsperado = 11 - (suma % 11);
                    dv = (dv == 'K')?10:dv;
                    dv = (dv == 0)?11:dv;
                 if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
           
                    rut.setCustomValidity('');
            }
        </script>    
            
        </div>
    </div>
    <?php include('../footer.html');?> 
</div>

</body>
</html>

<?php } ?>