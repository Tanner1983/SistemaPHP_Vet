<?php

include('conectar.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veterinaria San Francisco del Maule</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">         
            <header class="header">
              <a href="index.php"><img src="image/logo.jpg" width="100"></a>  
                <h4 class="logo">Veterinaria San Francisco del Maule</h4>
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
                    <img src="image/logo2.jpg" alt="" class="profile"> </div>
                <div class="column">
                    <p>Vacunacion en felinos y caninos, toda vacuna por protocolo incluye antiparasitario </p>
                    <p>
                    Procedimientos quirúrgicos especializados...
                    Todo procedimiento que involucra anestesia incluye una noche de hospitalizacion...</p>
                    <p>
                    consultas clínicas, emergencias, control paciente sano ...
                    atención especializada en animales de compañia     
                    </p>
                    <p>Servicios de hospitalizacion y Chipeo</p>
                </div>
            </section>

            <div class="gallery">
            <?php 
                $query = mysqli_query($link, "SELECT * FROM pt_tbproducto");
                $count = mysqli_num_rows($query);
                echo "<h2>ÚLTIMOS PRODUCTOS Y SERVICIOS: ".$count."</h2>";
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

            <footer id="contact">
                <p class="hero_header">CONSULTAS RECLAMOS O SUGERENCIAS</p>
                <div class="button"><a href="contacto.php">CONTACTO</a></div>
            </footer>

            <div class="copyright">&copy;2018 - <strong>Veterinaria San Francisco del Maule</strong></div>
        </div>
   
    </body>
</html>

