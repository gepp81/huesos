<?php

    function saveAutocomplete($acronimo, $localidad, $provincia, $pais){
        $result = conectarDB(array("SELECT `nombre` FROM `acronimos` WHERE `nombre` = '". $acronimo. "'"));
        if ($result->num_rows == 0 && $acronimo != ''){
            conectarDB(array("INSERT INTO `acronimos` (`nombre`) VALUES ('". $acronimo ."')"));
        }
        $result = conectarDB(array("SELECT `nombre` FROM `localidades` WHERE `nombre` = '". $localidad. "'"));
        if ($result->num_rows == 0 && $localidad != ''){
            conectarDB(array("INSERT INTO `localidades` (`nombre`) VALUES ('". $localidad ."')"));
        }
        $result = conectarDB(array("SELECT `nombre` FROM `provincias` WHERE `nombre` = '". $provincia. "'"));
        if ($result->num_rows == 0 && $provincia != ''){
            conectarDB(array("INSERT INTO `provincias` (`nombre`) VALUES ('". $provincia."')"));
        }
        $result = conectarDB(array("SELECT `nombre` FROM `paises` WHERE `nombre` = '". $pais. "'"));
        if ($result->num_rows == 0 && $pais != ''){
            conectarDB(array("INSERT INTO `paises` (`nombre`) VALUES ('". $pais ."')"));
        }        
        
    }
?>
