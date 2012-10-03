<?php
/*
 * Trae los datos para el paginador de jquery.
 */
    // Valor traido desde el javascript
    $query = "SELECT COUNT(`numero_registro`) AS 'total' FROM `inventario_oseo`";
    include 'conectarDB.php';
    $resultado = conectarDB(array($query));
    $total = $resultado->fetch_object()->total;
    $datos['totalReg'] = $total;
    $datos['totalPag'] = intval(ceil($total / 10));
    echo json_encode($datos);
?>
