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
                $query = mysqli_query($link, "SELECT * FROM pt_tbticket WHERE id_ticket='$id'");
                $count = mysqli_num_rows($query);

             if ($count > 0) {
                 $row = mysqli_fetch_array($query);                 
                 ?>
        <div class="formulario">
                     <form action="crear.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="idt">Id Ticket</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="idt" name="idt"value="<?php echo $row['id_ticket']; ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="fecha">Fecha</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fecha" name="fecha" value="<?php $fecha=$row['fe_ticket'];$nfecha=date("d/m/y", strtotime($fecha));echo $nfecha;?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="hora">Hora </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="hora" name="hora" value="<?php $hora=$row['ho_ticket'];$nhora=date("h:i a",strtotime($hora)); echo $nhora;?>" readonly="readonly">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="ncliente">Nombre del cliente </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="ncliente" name="ncliente" value="<?php echo $row['nom_cl']; ?>" readonly="readonly">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-25">
                                <label for="desc">Motivo de la consulta</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="desc" name="desc" value="<?php echo $row['de_ticket']; ?>" readonly="readonly">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-25">
                                <label for="paciente">Paciente </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="pac" name="pac" value="<?php
                                    $idm=$row['id_mas'];
                                    $query = mysqli_query($link, "SELECT * FROM pt_tbpaciente WHERE id_mas='$idm'");
                                    while($row = mysqli_fetch_assoc($query)){
                                    echo $row['no_mas']; ?>" readonly="readonly">
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-25">
                                <label for="problema">Descripcion del problema</label>
                            </div>
                            <div class="col-75">
                                <textarea name="problema" required></textarea>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-25">
                                <label for="diag">Diagnostico</label>
                            </div>
                            <div class="col-75">
                                <textarea name="diag" required></textarea><br></p>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="trat">Tratamiento</label>
                            </div>
                            <div class="col-75">
                                <textarea name="trat" required></textarea><br></p>
                            </div>
                        </div>
                        <input type="hidden" id="modo" name="modo" value="P">  
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id_cl'];?>"> 
                        <div class="row">
                            <p>
                                <input type="submit" value="Crear Ficha" name="agregar">
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