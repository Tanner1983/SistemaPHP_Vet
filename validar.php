<?php

include('conectar.php');

// Captura de Datos

$nombre = $_POST['nombre'];
$pass = $_POST['password'];


// Consulta

$query = mysqli_query($link,"SELECT * FROM pt_tbusuario WHERE id_usuario='$nombre' && pas_usuario='$pass'");
$count = mysqli_num_rows($query);

if($count > 0){
    session_start();
    
    $row = mysqli_fetch_array($query);
    
    $row['id_usuario'];
    $row['nom_usuario'];
    $row['ape_usuario'];
    $row['pas_usuario'];
    $row['ema_usuario'];
    $row['tip_usuario'];
    
    if($row['tip_usuario']==2){
        $_SESSION['nombre'] = $row['nom_usuario'];
        $_SESSION['password'] = $row['pas_usuario'];
        header('Location: int_usuario/index.php');
    }elseif ($row['tip_usuario']==1){    
        $_SESSION['nombre'] = $row['nom_usuario'];
        $_SESSION['password'] = $row['pas_usuario'];
        header('Location: int_admin/index.php');
    }elseif ($row['tip_usuario']==3){    
        $_SESSION['nombre'] = $row['nom_usuario'];
        $_SESSION['password'] = $row['pas_usuario'];
        header('Location: int_medico/index.php');
    }elseif ($row['tip_usuario']==4){    
        $_SESSION['nombre'] = $row['nom_usuario'];
        $_SESSION['password'] = $row['pas_usuario'];
        header('Location: int_megauser/index.php');
    }
    
}else {
    require("index.php");
    print '<script language="JavaScript">';
    print 'alert("Nombre de usuario o Contraseña Incorrecto");';
    print '</script>';   
}

?>
