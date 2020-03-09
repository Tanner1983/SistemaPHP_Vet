<?php

include('conectar.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trabajo final programacion Web</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  
  <header class="header">
      <a href="index.php"><img src="image/logo.jpg" width="100"></a>  
                <h4 class="logo">Veterinaria</h4>
                <nav id="menu"> 
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="somos.php">QUIENES SOMOS</a></li>
                        <li><a href="productos.php">PRODUCTOS</a></li>
                        <li><a href="contacto.php">CONTACTO</a></li>
                        <li><a href="intranet.php">INTRANET</a></li>
                    </ul>
                </nav>
  </header>
  
  <section class="intro">
    <div class="column">
      <h3>Tienda de videojuegos</h3>
      <img src="image/logo2.jpg" alt="" class="profile"> </div>
    <div class="column">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
    </div>
  </section>
  <!-- Stats Gallery Section -->
  <h2 class="title">BIENVENIDO</a></h2>
   <div class="gallery">
            <?php 
                $query = mysqli_query($link, "SELECT * FROM pt_tbproducto");
                $count = mysqli_num_rows($query);
                echo "<h2>PRODUCTOS DISPONIBLES EN NUESTRA TIENDA:</h2>";
            ?>
                <?php
                while($row = mysqli_fetch_assoc($query)){
                ?>

       <div class="thumbnail"> <a href="#"><img src="int_admin/uploads/<?php echo $row['ruta_imagen']; ?>" alt="" width="100" /></a>
                        <h4><?php echo $row['nom_pro']; ?></h4>
                        <p class="tag">$<?php echo $row['prv_pro']; ?></p>
                        <p class="text_column"><?php echo $row['des_pro']; ?></p>                       
                    </div>

            <?php } ?>  
     </div>     
   <div class="gallery">
            <?php 
                $query = mysqli_query($link, "SELECT * FROM pt_tbservicio");
                $count = mysqli_num_rows($query);
                echo "<h2>SERVICIOS DISPONIBLES:</h2>";
            ?>
                <?php
                while($row = mysqli_fetch_assoc($query)){
                ?>

                    <div class="thumbnail"> <a href="#"><img src="int_admin/uploads/<?php echo $row['ruta_imagen']; ?>" alt="" width="100" /></a>
                        <h4><?php echo $row['nomb_serv']; ?></h4>
                        <p class="tag">$<?php echo $row['prec_serv']; ?></p>
                        <p class="text_column"><?php echo $row['desc_serv']; ?></p>
                        <form>                            
                            <input class="boton" type="submit" value="MAS INFO" />
                        </form>
                    </div>

            <?php } ?>  
     </div>		
  <!-- Footer Section -->
            <footer id="contact">
                <p class="hero_header">CONSULTAS RECLAMOS O SUGERENCIAS</p>
                <div class="button"><a href="contacto.php">CONTACTO</a></div>
            </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>Rodrigo Stuardo</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
