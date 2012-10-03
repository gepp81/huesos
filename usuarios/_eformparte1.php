<div id="form_contenido1">
    <table>
        <tr>
            <td width="80%"><label class="formu_titulo">Ubicaci&oacute;n y Cronolog&iacute;a</label></td>
            <td width="10%" ><label id="mas1" ><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom" /></label></td>
            <td width="10%" ><label id="menos1"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido1_oculto" >
        <table>
            <tr>
                <td><label>N&uacute;mero Resumen</label></td>
                <td><input name="numero_resumen" type="text" value="<?php echo $renglon['numero_resumen'] ?>" id="numero_resumen"/></td>
                <td><label>N&uacute;mero Registro</label></td>
                <td><input name="numero_registro" type="text" value="<?php echo $renglon['numero_registro'] ?>" id="numero_registro"/></td>
            </tr>
            <tr>
                <td colspan="4">Ubicaci&oacute;n</td>
            </tr>            
            <tr>
                <td><label>Sitio</label></td>
                <td><input type="text" name="sitio" id='sitio' value="<?php echo $renglon['sitio'] ?>"/></td>
                <td> <label>Acr&oacute;nimo</label></td>
                <td><input type="text" name="acronimo" id='acronimo' value="<?php echo $renglon['acronimo'] ?>"/></td>
            </tr>
            <tr>
                <td><label>Localidad</label></td>
                <td><input type="text" name="localidad" id='localidad' value="<?php echo $renglon['localidad'] ?>"/></td>
                <td><label>Provincia</label></td>
                <td><input type="text" name="provincia" id='provincia' value="<?php echo $renglon['provincia'] ?>"/>
            </tr>
            <tr>
                <td><label>Pa&iacute;s</label></td>
                <td><input type="text" name="pais" id='pais' value="<?php echo $renglon['pais'] ?>"/></td>
                <td colspan="2"></td>
            </tr>            
            <tr>
                <td colspan="4">Coordenadas</td>
            </tr>
            <tr>
                <td><label>Latitud</label></td>
                <td><input type="text" name="latitud" value="<?php echo $renglon['latitud'] ?>" id="latitud"/></td>
                <td><label>Longitud</label></td>
                <td><input type="text" name="longitud" value="<?php echo $renglon['longitud'] ?>" id="longitud"/></td>
            </tr>
            <tr>
                <td><label>Precisi&oacute;n</label></td>
                <td><select name="precision">
                        <option value="<?php echo $renglon['precision'] ?>"><?php echo $renglon['precision'] ?></option>
                        <option value="No">No tiene</option>
                        <option value="Aproximada">Aproximada</option>
                        <option value="Exacta">Exacta</option>
                    </select>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="4">Otros</td>
            </tr>
            <tr>
                <td><label>Periodo</label></td>
                <td><input type="text" name="periodo" value="<?php echo $renglon['periodo'] ?>"/></td>
                <td><label>Dataciones</label></td>
                <td>
                    <select name="dataciones">
                        <option value="<?php echo $renglon['dataciones'] ?>"><?php echo $renglon['dataciones'] ?></option>
                        <option value="No">No tiene</option>
                        <option value="14C">14C</option>
                        <option value="AMS">AMS</option>
                    </select>
                </td>
            </tr>            
            <tr>
                <td><label>Material Asociado</label></td>
                <td>
                    <select name="material_asociado">
                        <option value="<?php echo $renglon['material_asociado'] ?>"><?php echo $renglon['material_asociado'] ?></option>
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
                <td><label>Sobrehueso</label></td>
                <td>
                    <select name="sobrehueso">
                        <option value="<?php echo $renglon['sobrehueso'] ?>"><?php echo $renglon['sobrehueso'] ?></option>
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>