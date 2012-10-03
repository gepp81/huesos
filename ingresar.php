<?php

$query = "SELECT `nombreusuario`,`contrasenia` FROM  `usuario` WHERE `nombreusuario` = '" . $_POST['nombre'] . "'";
include 'conectarDB.php';
$resultado = conectarDB(array($query));
$renglon = $resultado->fetch_assoc();

if ($_POST['nombre'] == $renglon['nombreusuario'] && $_POST['passsha1'] == $renglon['contrasenia']) {
    //include 'lib/SessionManager.php';
    //ini_set('session.save_handler', 'user');
    //$session = new Session();
    session_start();
    $_SESSION['nombreusuario'] = $renglon['nombreusuario'];
    //header("Location: index.php");exit;
    header("Location: usuarios/huesos.php");
    exit;
}
header("Location: index.php");
exit;
?>
