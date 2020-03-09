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
  <!-- Header -->
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
             </form></li>
         </ul>
     </nav>
  </header>
  <!-- Hero Section -->
  <section class="intro">
    <div class="column">
     
  </section>
  <!-- Stats Gallery Section -->
  <h2 class="title">Formulario de Contacto</a></h2>
  <div class="entry">                                                    
      <form id="loginform" action="mail.php" method="POST">
          <p> <strong><label class="label">Nombre </label></strong>
              <input type="text" class="input" name="nombre" placeholder="Pon tu Nombre" required /><br></p>

          <p> <strong><label class="label">E-Mail </label></strong>
              <input type="email" class="input" name="mail" placeholder="Pon tu E-Mail" required /><br></p>

          <p> <strong><label class="label">Telefono </label></strong>
              <input type="tel" class="input" name="telefono" placeholder="Pon tu numero" required /><br></p>
          
           <p> <strong><label class="label">Asunto </label></strong>
              <input type="text" class="input" name="asunto" placeholder="Coloca el asunto" required /><br></p>

          <p> <strong><label class="label">Mensaje  </label><br></strong>
              <textarea class="input" name="mensaje"></textarea><br></p>

          <p> <strong><input type="submit" class="loginbutton"  value="Enviar" />
                  <input type="reset" class="loginbutton" value="Limpiar" /></strong></p>

      </form> 
  </div>				
  <!-- Footer Section -->
            <footer id="contact">
                <p class="hero_header">CONSULTAS RECLAMOS O SUGERENCIAS</p>
                <div class="button"><a href="contacto.php">CONTACTO</a></div>
            </footer>  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>Veterinaria San Francisco del Maule</strong></div>
</div>

</body>
</html>
