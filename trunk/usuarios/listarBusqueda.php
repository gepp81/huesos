<?php
// numero de registros para paginator
$numReg = 10;
// $_POST[min] es el numero de la pagina a buscar
$minReg = ($_POST['min'] * $numReg) - 10;
// Valores a buscar
$valores = $_POST['valores'];
// Campos a buscar
$campos = $_POST['campos'];
// Query inicial
$query = "SELECT `io`.`ficha`,`io`.`numero_resumen`,`io`.`numero_registro`";
foreach ($campos as $campo) {
    $query .= ",`" . $campo . "`";
}
$query .= "FROM `inventario_oseo` `io`
                INNER JOIN `inventario_arq` `ia` ON `io`.`numero_registro`=`ia`. `id_inventario`
                INNER JOIN `inventario_ubi` `iu` ON `io`.`numero_registro`=`iu`. `id_inventario`";


if (count($campos) > 0) {
    $val = htmlspecialchars_decode($valores[0]);
    $query .= " WHERE `" . $campos[0] . "` LIKE '%" . $val . "%'";
    for ($i = 1; $i < count($campos); $i++) {
        $query .= " AND   `" . $campos[$i] . "` LIKE '%" . $valores[$i] . "%'";
    }
}

//$query .= "LIMIT " . $minReg . "," . $numReg;
//echo $query;die;
include 'conectarDB.php';
$resultado = conectarDBU(array($query));
//echo "<pre>";print_r($resultado); echo "</pre>";die;
?> 
<p><p></p></p>
<?php if ($resultado->num_rows > 0) : ?>
    <table border="1">
        <thead id="tbodyresultado">
            <tr align="center">
                <th colspan="<?php echo (count($campos) + 7); ?>"><h3>Resultado de la b&uacute;squeda</h3></th>
            </tr>
            <tr>
                <td>Ficha</td>
                <td>&#35; Resumen</td>
                <td>&#35; Registro
                    <?php foreach ($campos as $campo) : ?>
                    <td><?php echo ucwords(str_replace("_", " ", $campo)) ?></td>
                <?php endforeach; ?>
                <td colspan="3">Acciones</td>
        </tr>
        </thead>
    <tbody id="tbodyresultado">
        <?php while ($row = $resultado->fetch_array()) : ?>
            <tr id="renglon<?php echo $row['numero_registro'] ?>">
                <?php //echo "<pre>".print_r($row)."</pre>"; die; ?>
                <td><?php echo $row['ficha'] ?></td>
                <td><?php echo $row['numero_resumen'] ?></td>
                <td><?php echo $row['numero_registro'] ?></td>
                <?php foreach ($campos as $campo) : ?>
                    <td><?php echo $row[$campo]; ?></td>
                <?php endforeach; ?>
                <td>
                    <a href="ver_form.php?num=<?php echo $row['numero_registro'] ?>">
                        <img class="imgpointer" src="img/buscar1.png" width="24" height="24" title="Ver Registro"></img>
                    </a>
                </td>
                <td>
                    <a href="editar_form.php?num=<?php echo $row['numero_registro'] ?>">
                        <img class="imgpointer" src="img/editar1.png" title="Editar"></img>
                    </a>
                </td>
                <td>
                    <div class="divs_del" onclick="borrar(<?php echo $row['numero_registro'] ?>);">
                        <img class="imgpointer" src="img/eliminar1.png" width="24" height="24" title="Borrar" ></img>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan=""></td>
        </tr>
    </tfoot>
    </table>
<?php else : ?>
    <table>
        <thead id="tbodyresultado">
            <tr>
                <th>&#161;No se encontraron resultados&#33;</th>
            </tr>
        </thead>
    </table>
<?php endif; ?>
