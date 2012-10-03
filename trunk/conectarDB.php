<?php

function conectarDB($queries)
{
    // XAMPP CASA
    /*$servidor = "localhost";$usuario = "piqui81";    $password = "gpi123"; //gpi123    $bd = "inventariooseo";*/
    // LABURO
    /**
     * CAMBIAR DATOS
     */
    $servidor = "localhost";
    $usuario = "root";
    $password = "gpi123"; //gpi123
    $bd = "inventariooseo";
    /**
     * FIN DATOS A CAMBIAR
     */
    // AWARD
    /* $servidor   = "fdb2.awardspace.com";      $usuario    = "gepp81_prode2008";      $password =  "g1981p";//gpi123      $bd           = "gepp81_prode2008"; */

    $conexion = new mysqli($servidor, $usuario, $password, $bd);
    if ($conexion->connect_errno) {
        $json['mensaje'] = "Connect failed: " . $conexion->connect_error;
        exit();
    }

    $conexion->autocommit("false");
    $resultados = array();
    // Lista de queries a ejecutar
    foreach ($queries as $query) {
        array_push($resultados, $conexion->query($query));
    }
    // Verificar si alguno fallo
    foreach ($resultados as $resultado) {
        if (!$resultado) {
            $conexion->rollback();
            $conexion->close();
            return false;
        }
    }
    $conexion->commit();
    $conexion->close();
    // Devuelve el primero, generalmente el único si es select
    return $resultados[0];
}
