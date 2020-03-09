<?php
$nombre =$_POST['nombre'];
$email =$_POST['mail'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];


if(isset($_POST['mail'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "tanner1983@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['mail']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Apellido: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Veterinaria San Francisco del Maule</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Header -->
  <header class="header">
      <a href="index.php"><img src="image/logo.png" width="120"></a>  
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
  <!-- Hero Section -->
  <section class="intro">
   
  </section>
  <!-- Stats Gallery Section -->
  <h2 class="title"><a href="#">Formulario de Contacto </a></h2>
						<div class="entry">                                                    
                                                    <?php
                                                        echo'Hola ' . $nombre . "<br>";
                                                    '';

                                                    echo "<br>";
                                                    echo '<div class="datos">
                                                    Los Datos enviados Fueron los siguientes:
                                                    </div>
                                                    ';
                                                                
                                                    echo "<br>";
                                                    echo'<div class="mostrar"> 
                                                    Nombre: ' . $nombre . "<br>" . "Correo Electronico: " . $email . "<br>" . "Telefono: " . $telefono .
                                                    '</div>
                                                    ';
                                                    echo "<br>";

                                                    echo'<div class="final">
                                                    Sus Datos ya fueron enviados satisfactoriamente!!!
                                                    </div>
                                                    ';
                                                    echo "<br>";
                                                    echo '<form action="index.php">                                                                    
                                                    <input type="submit" class="loginbutton" value="Volver" />             
                                                    </form>';
                                                    ?>		
  <!-- Footer Section -->
  <footer id="contact">
    <p class="hero_header">RECLAMOS O SUGERENCIAS</p>
    <div class="button"><a href="contacto.php">CONTACTO</a></div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>Veterinaria San Francisco del Maule</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
