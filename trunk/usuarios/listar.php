<?php
//session_start();
/* if (!isset($_SESSION['nombreusuario'])) {
  header("Location: salir.php");
  exit;
  } else {
  /*    if (isset($_POST['input_buscar']) && ($_POST['input_buscar'] != "" ))
  {
  $query = "SELECT *
  FROM  (`inventario_ubi`
  INNER JOIN
  (SELECT * FROM
  `inventario_oseo`
  INNER JOIN
  `inventario_arq`
  ON `inventario_oseo`.`numero_registro` = `inventario_arq`.`id_inventario`
  )
  AS `i_res` ON `i_res`.`numero_registro` = `inventario_ubi`.`id_inventario`
  )
  WHERE `" . $_POST['select_buscar'] . "` LIKE '" . $_POST['input_buscar'] . "%'
  ORDER BY `inventario_oseo`.`numero_registro` ASC";
  }
  else
  { */
// numero de registros para paginator
$numReg = 10;
// $_POST[min] es el numero de la pagina a buscar
$minReg = ($_POST['min'] * $numReg) - 10;
$query = "SELECT `ficha`,`numero_resumen`,`numero_registro`,`sitio`,`acronimo`,`dataciones`,`sobrehueso`
                        FROM `inventario_oseo`  LIMIT " . $minReg . "," . $numReg;
//}
//echo $query; die;
include 'conectarDB.php';
$resultado = conectarDB(array($query));
?> 

<table border="1">
    <thead id="tbodyresultado">
        <tr align="center">
            <th colspan="7"><h3>Lista de Registros</h3></th>
<th colspan="4"><a id='nuevoregistro' href="grabar_form.php">Nuevo Registro</a></th>
</tr>
<tr>
    <td>Ficha</td>
    <td>&#35 Resumen</td>
    <td>&#35 Registro
    <td>Sitio</td>
    <td>Acronimo</td>
    <td>Dataciones</td>
    <td>Sobrehueso</td>
    <td colspan="3">Acciones</td>
    <td><input type="checkbox" id="checkall"/></td>
</tr>
</thead>
<tbody id="tbodyresultado">
    <?php ?>
    <?php while ($row = $resultado->fetch_array()) : ?>
        <tr id="renglon<?php echo $row['numero_registro'] ?>">
            <td><?php echo $row['ficha'] ?></td>
            <td><?php echo $row['numero_resumen'] ?></td>
            <td><?php echo $row['numero_registro'] ?></td>
            <td><?php echo $row['sitio'] ?></td>
            <td><?php echo $row['acronimo'] ?></td>
            <td><?php echo $row['dataciones'] ?></td>
            <td><?php echo $row['sobrehueso'] ?></td>
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
            <td><input class="checks" type="checkbox" id="<?php echo $row['numero_registro'] ?>"/></td>
        </tr>
    <?php endwhile; ?>
</tbody>
<tfoot>
    <tr>
        <td colspan="7"></td>
        <td colspan="3" align="right">Eliminar Marcados</td>
        <td id="eliminarmarcados"><img src="img/cancelar.png" title="Eliminar Marcados" width="24" height="24"/></td>
    </tr>
</tfoot>
</table>