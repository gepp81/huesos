<div id="form_contenido1">
    <table>
        <tr>
            <td width="70%"><label class="formu_titulo">Ubicaci&oacute;n y Cronolog&iacute;a</label></td>
            <td width="10%"><a href="editar_form.php?num=<?php echo $renglon['numero_registro']; ?>"><label id="mas1" ><img src="img/editar1.png" title="Editar Registro" class="tdzoom"/></label></a></td>
            <td width="10%"><label id="mas1" ><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom" /></label></td>
            <td width="10%"><label id="menos1"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido1_oculto" >
        <table>
            <tr>
                <td><label>N&uacute;mero Resumen</label></td>
                <td><label class="labelnegro"><?php echo $renglon['numero_resumen'] ?></label></td>
                <td><label>N&uacute;mero Registro</label></td>
                <td><label class="labelnegro"><?php echo $renglon['numero_registro'] ?></label></td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="4">Ubicaci&oacute;n</td>
            </tr>            
            <tr>
                <td><label>Sitio</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['sitio']) ?></label></td>
                <td colspan="2" rowspan="6"><div id="mapaflotante" style="margin: auto;"></div></td>
            </tr>                
            <tr>
                <td><label>Acr&oacute;nimo</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['acronimo']) ?></label></td>
            </tr>
            <tr>
                <td><label>Localidad</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['localidad']) ?></label></td>
            </tr>
            <tr>
                <td><label>Provincia</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['provincia']) ?></label></td>
            </tr>
            <tr>
                <td><label>Pa&iacute;s</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['pais']) ?></label></td>
            </tr>            
            <tr>
                <td></td>
                <td></td>
            </tr>            
            <tr>
                <td><label>Precisi&oacute;n</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['precision']) ?></label></td>
                <td colspan="2"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="4">Otros</td>
            </tr>
            <tr>
                <td><label>Periodo</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['periodo']) ?></label></td>

                <td><label>Dataciones</label></td>
                <td><label class="labelnegro"> <?php echo htmlentities($renglon['dataciones']) ?></label></td>
            </tr>            
            <tr>
                <td><label>Material Asociado</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['material_asociado']) ?></label></td>
                <td><label>Sobrehueso</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['sobrehueso']) ?></label></td>
            </tr>
        </table>
    </div>
</div>