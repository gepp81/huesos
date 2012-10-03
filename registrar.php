<?php
    $query1 = "INSERT INTO `usuario` 
                    (`nombreusuario`,`contrasenia`)
                    VALUES('".$_POST['nombre_reg']."','".$_POST['passsha1_reg']."')";
    include 'conectarDB.php';
    conectarDB(array($query1));
    header('Location: index.php');
    exit;

?>
