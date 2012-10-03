<?php

session_start();
if (!isset($_SESSION['nombreusuario'])) {
    header("Location: salir.php");
    exit;
} else {
    // Query para inverntario oseo
    $query1 = "REPLACE INTO `inventario_oseo` (
        		`numero_resumen`,`numero_registro`,`sitio`,
                `acronimo`,`localidad`,`provincia`,`pais`,
                `periodo`,`latitud`,`longitud`,
                `precision`,`dataciones`,`material_asociado`,
                `sobrehueso`)  VALUES(
				'" . $_POST['numero_resumen'] . "','" . $_POST['numero_registro'] . "','" . $_POST['sitio'] . "',
				'" . $_POST['acronimo'] . "','" . $_POST['localidad'] . "','" . $_POST['provincia'] . "','" . $_POST['pais'] . "',
				'" . $_POST['periodo'] . "','" . $_POST['latitud'] . "','" . $_POST['longitud'] . "',
				'" . $_POST['precision'] . "','" . $_POST['dataciones'] . "','" . $_POST['material_asociado'] . "',
                '" . $_POST['sobrehueso'] . "')";

    // Query para inverntario arq
    $query2 = "REPLACE INTO `inventario_arq` (
                      `id_inventario`,
                     `arqueologo_responsable`,`fecha_inicio`,`fecha_finalizacion`,
                     `ente_responsable`,`numero_reg_arq`,`tipo_sepultura`,
                        `sexo`,`edad`,`anios`,
                        `grado_integridad`,`numero_elementos`,`tratamiento_conservacion`,
                        `rel_pato_esqueleto`,`estudios_realizados`,`rel_pato_masticatorio`,
                        `elementos_asociados`,`otros_asociados`,`vestimenta_asociada`,
                        `registro_fotografico`,`referencia_bibliograficas`
                        ) VALUES(
                       '" . $_POST['numero_registro'] . "',
                       '" . $_POST['arqueologo_responsable'] . "','" . $_POST['fecha_inicio'] . "','" . $_POST['fecha_finalizacion'] . "',
                       '" . $_POST['ente_responsable'] . "','" . $_POST['numero_reg_arq'] . "','" . $_POST['tipo_sepultura'] . "',
                       '" . $_POST['sexo'] . "','" . $_POST['edad'] . "','" . $_POST['anios'] . "',
                       '" . $_POST['grado_integridad'] . "','" . $_POST['numero_elementos'] . "','" . $_POST['tratamiento_conservacion'] . "',
                       '" . $_POST['rel_pato_esqueleto'] . "','" . $_POST['estudios_realizados'] . "','" . $_POST['rel_pato_masticatorio'] . "',
                       '" . $_POST['elementos_asociados'] . "','" . $_POST['otros_asociados'] . "','" . $_POST['vestimenta_asociada'] . "',
                       '" . $_POST['registro_fotografico'] . "','" . $_POST['referencia_bibliograficas'] . "')";
    //echo $_POST['edad']; die;
    // Query para inverntario ubi
    $query3 = "REPLACE INTO  `inventario_ubi` (
                        `id_inventario`,
                        `fecha_ingreso`,`numero_caja`,`sala`,
			`estanteria`,`restos_humano`,`otros_restos`,
			`forma_ingreso`,`fecha_salida`,`res_registro`,
			`res_conservacion`,`res_digitalizacion`,`res_bodegaje`,`observaciones`
                        ) VALUES(
                        '" . $_POST['numero_registro'] . "',
                        '" . $_POST['fecha_ingreso'] . "','" . $_POST['numero_caja'] . "','" . $_POST['sala'] . "',
			'" . $_POST['estanteria'] . "','" . $_POST['restos_humano'] . "','" . $_POST['otros_restos'] . "',
			'" . $_POST['forma_ingreso'] . "','" . $_POST['fecha_salida'] . "','" . $_POST['res_registro'] . "',
			'" . $_POST['res_conservacion'] . "','" . $_POST['res_digitalizacion'] . "','" . $_POST['res_bodegaje'] . "',
			'" . $_POST['observaciones'] . "')";
    include 'conectarDB.php';
    // Si realiza las queries 
    if (conectarDB(array($query1, $query2, $query3))) {
        // Pregunto si subió archivo
        if ($_FILES['inventario_osteologico']['name'] != "") {
            // Muevo el archivo
            $nombre_archivo = $_POST['numero_registro'] . $_FILES['inventario_osteologico']['name'];
            if (move_uploaded_file($_FILES['inventario_osteologico']['tmp_name'], "esquemas/$nombre_archivo")) {
                // Actualizo la base
                $query1 = "UPDATE `inventario_arq` SET `inventario_osteologico` = '" . $nombre_archivo . "' WHERE `id_inventario` = " . $_POST['numero_registro'];
                conectarDB(array($query1));
            } else {
                $_SESSION['mensaje'] = " Se ha introducido el registro con &eacute;xito. Pero no se ha podido subir el esquema";
            }
            $_SESSION['mensaje'] = " Se ha introducido el registro con &eacute;xito.";
        } else {
            $_SESSION['mensaje'] = " Se ha introducido el registro con &eacute;xito.";
        }
    } else {
        $_SESSION['mensaje'] = " No se ha podido editar el registro.";
    }

    // controla si existe los valores de los autocompletes!!
    include 'saveAutocompletes.php';
    saveAutocomplete($_POST['acronimo'], $_POST['localidad'], $_POST['provincia'], $_POST['pais']);

    header('Location: huesos.php');
    exit;
}
?>
