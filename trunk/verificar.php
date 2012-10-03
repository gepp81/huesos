<?php
    include 'lib/SessionManager.php';
    ini_set('session.save_handler', 'user');
    $session = new Session();
    session_start();
    
    if (!isset ($_SESSION['nombreusuario']))
    {
        header("Location: index.php");
    }
?>        