<?php

/*
  // XAMPP CASA
  /* $servidor = "localhost";
  $usuario = "piqui81";
  $password = "gpi123"; //gpi123
  $bd = "inventariooseo";
  // LABURO
  $servidor = "localhost";
  $usuario = "root";
  $password = "gpi123"; //gpi123
  $bd = "inventariooseo";
  // AWARDSPACE
  $servidor   = "fdb2.awardspace.com";
  $usuario    = "gepp81_prode2008";
  $password =  "g1981p";//gpi123
  $bd           = "gepp81_prode2008";
 *  */

function conectarDB($queries)
{ /**
    *  DATOS A CAMBIAR MA
    */
    $servidor = "localhost"; // el mismo
    $usuario = "root"; // elmismo
    $password = "gpi123"; // tu clave
    $bd = "inventariooseo";//la misma
    /**
    * FIN DE DATOS A CAMBIAR MA
    */
    $conexion = new mysqli($servidor, $usuario, $password, $bd);
    if ($conexion->connect_errno) {
        printf("Fallo la DB: %s\n", $conexion->connect_error);
    }
    $conexion->autocommit("false");
    $resultados = array();
    foreach ($queries as $query) {
        array_push($resultados, $conexion->query($query));
    }
    foreach ($resultados as $resultado) {
        if (!$resultado) {
            $conexion->rollback();
            $conexion->close();
            return false;
        }
    }
    $conexion->commit();
    $conexion->close();
    return $resultados[0];
}

function conectarDBU($queries)
{/**
    *  DATOS A CAMBIAR MA
    */
    $servidor = "localhost"; // Es elservido, para xampp el mismo
    $usuario = "root"; //usuario root el mismo
    $password = "gpi123"; // tu clave
    $bd = "inventariooseo";
/**
    * FIN DATOS A CAMBIAR MA
    */
    $conexion = new mysqli($servidor, $usuario, $password, $bd);
    if ($conexion->connect_errno) {
        printf("Fallo la DB: %s\n", $conexion->connect_error);
    }
    $conexion->autocommit("false");
    $conexion->set_charset("utf8");
    $resultados = array();
    foreach ($queries as $query) {
        array_push($resultados, $conexion->query($query));
    }
    foreach ($resultados as $resultado) {
        if (!$resultado) {
            $conexion->rollback();
            $conexion->close();
            return false;
        }
    }
    $conexion->commit();
    $conexion->close();
    return $resultados[0];
}