<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trabajo final programacion Web</title>
            <link href="../css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<!-- Main Container -->
        <div class="container"> 
  <!-- Header -->
        <header class="header">
            <a href="../index.php"><img src="../image/logo.png" width="120"></a>  
            <h4 class="logo">Venta de Videojuegos</h4>
            <?php include('menu.html');?>  
        </header>
    <section class="intro">
        <div class="column">
            <h3>Tienda de videojuegos</h3> 
        <img src="../image/logo2.jpg" alt="" class="profile"> </div>
        <div class="column">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
        </div>
    </section>
  <div class="gallery">           
        <div class="thumbnail"> <a href="#"><img src="intranet/uploads/<?php echo $row['ruta_imagen']; ?>" alt="" width="100" /></a>
            <h4>No se encuentra Usuario<br>
                Su contraseña se encuentra erronea<br>
                No tiene Permisos para Acceder<br></h4>
            <form>
                <input class="boton" type="button" onclick="location.href='../index.php'" value="Volver" name="boton" />                 
            </form>            
        </div>
    </div>           
    <br>
        
<?php include('footer.html');?> 
</div>
<!-- Main Container Ends -->
</body>
</html>


