<?php
    session_start();
    if (!isset($_SESSION['nombreusuario']))
    {
        header("Location: salir.php");
        exit;
    }
    else
    {
        $query = "SELECT `nombre` FROM  `".$_GET['opcion']."` ORDER BY `nombre` ASC";
        include 'conectarDB.php';
        $resultado = conectarDB(array($query));
        $var = Array();
        while ($renglon = $resultado->fetch_assoc())
        {
            $var[] = $renglon['nombre'];
        }
        echo json_encode($var);
    }
?>