<?php

session_start();
if (!isset($_SESSION['nombreusuario']))
{
    header("Location: salir.php");
    exit;
}
else
{
    include 'conectarDB.php';
    $arreglo = $_POST['arreglo'];
    foreach ($arreglo as $num)
    {
        echo $num;
        $query1 = "DELETE FROM `inventario_arq` WHERE `id_inventario` = '$num'";
        $query2 = "DELETE FROM `inventario_ubi` WHERE `id_inventario` = '$num'";
        $query3 = "DELETE FROM `inventario_oseo` WHERE `numero_registro` = '$num'";
        conectarDB(array($query1, $query2, $query3));
    }
}
?>