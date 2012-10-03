<?php
    session_start();
    if (!isset($_SESSION['nombreusuario']))
    {
        header("Location: salir.php");
        exit;
    }
    else
    {
        header("Location: huesos.php");
        exit;
    }
?>