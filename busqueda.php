<?php if ( isset ($_POST['select_buscar']) || isset($_POST['input_buscar'])) : ?>
<?php
    $query = "SELECT `ficha`,`numero_resumen`,`numero_registro`,`sitio`,`acronimo`,`dataciones`,`sobrehueso`
                        FROM  `inventario_ubi` INNER JOIN 
                       (SELECT * FROM `inventario_oseo` INNER JOIN `inventario_arq` 
                            ON `inventario_oseo`.`numero_registro` = `inventario_arq`.`id_inventario` 
                            WHERE `inventario_oseo`.`".$_POST['select_buscar']."` LIKE '".$_POST['input_buscar']."%')
                            AS `i_res` ON `i_res`.`numero_registro` = `inventario_ubi`.`id_inventario` ";        
    include 'conectarDB.php';
    $resultado = conectarDB(array($query));
?>
    <?php if ($resultado->num_rows != 0) : ?>
        <h2>Lista de Registros Encontrados</h2>
        <table border="1">
            <tr>
                <td>ficha</td>
                <td>numero_resumen</td>
                <td>numero_registro</td>
                <td>sitio</td>
                <td>acronimo</td>
                <td>dataciones</td>
                <td>sobrehueso</td>
                <td>Ver</td>
            </tr>
            <?php while($row = $resultado->fetch_array()) : ?>
            <tr>
                <td><?php echo $row['ficha'] ?></td>
                <td><?php echo $row['numero_resumen'] ?></td>
                <td><?php echo $row['numero_registro'] ?></td>
                <td><?php echo $row['sitio'] ?></td>
                <td><?php echo $row['acronimo'] ?></td>
                <td><?php echo $row['dataciones'] ?></td>
                <td><?php echo $row['sobrehueso'] ?></td>
                <td><input type="button" name="<?php echo $row['numero_registro'] ?>" class="boton_ver" value="Ver"/></td>
            </tr>
            <?php endwhile;?>
    </table>
    <?php endif;?>
<?php endif;?>    
<script>
    $(function() {
        $(".boton_ver").click(function() {
            event.preventDefault();

        });
    });
</script>
    
