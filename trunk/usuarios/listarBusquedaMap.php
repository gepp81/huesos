<?php

// Valores a buscar
$valores = $_POST['valores'];
// Campos a buscar
$campos = $_POST['campos'];
// Query inicial
$query = "SELECT `io`.`ficha`,`io`.`numero_resumen`,`io`.`numero_registro`,`io`.`sitio`,`io`.`latitud`, `io`.`longitud`, `io`.`precision`
                        FROM `inventario_oseo` `io`
                        INNER JOIN `inventario_arq` `ia` ON `io`.`numero_registro`=`ia`. `id_inventario`
                        INNER JOIN `inventario_ubi` `iu` ON `io`.`numero_registro`=`iu`. `id_inventario`";

// Agregar a Query las busquedas
if (count($campos) > 0) {
    $val = htmlspecialchars_decode($valores[0]);
    $query .= " WHERE `" . $campos[0] . "` LIKE '%" . $val . "%'";
    for ($i = 1; $i < count($campos); $i++) {
        $query .= " AND   `" . $campos[$i] . "` LIKE '%" . $valores[$i] . "%'";
    }
}

include 'conectarDB.php';
$resultado = conectarDBU(array($query));
$num = 0;
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_array()) {
        if ($row['latitud'] != '' && $row['longitud'] != '' ){
            $json['datos'][$row['numero_registro']]['lat'] = $row['latitud'];
            $json['datos'][$row['numero_registro']]['data'] = "# de registro: ". $row['numero_registro'] . " - <a href='ver_form.php?num=". $row['numero_registro'] ."'>Ver datos completos.</a><br/>Precisión: ". $row['precision'] ;
            $json['datos'][$row['numero_registro']]['lng'] = $row['longitud'];
            //$json[]['sitio'] =  $row['sitio'];
            // suma num ++, lo hago porque solo devuelvo los que tienen coordenasas
            $num++;
        }
    }
    echo json_encode($json);
}
//$json['numero'] = $num;

?>
