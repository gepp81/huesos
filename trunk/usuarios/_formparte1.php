<div id="form_contenido1">
    <table>
        <tr>
            <td width="80%"><label class="formu_titulo">Ubicaci&oacute;n y Cronolog&iacute;a</label></td>
            <td width="10%"><label id="mas1" ><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom"/></label></td>
            <td width="10%"><label id="menos1"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido1_oculto" >
        <table>
            <tr>
                <td><label>N&uacute;mero Resumen</label></td>
                <td><input name="numero_resumen" type="text" value="" id="numero_resumen"/></td>
                <td><label>N&uacute;mero Registro</label></td>
                <td><input name="numero_registro" type="text" value="" id="numero_registro"/></td>
            </tr>
            <tr>
                <td colspan="4">Ubicaci&oacute;n</td>
            </tr>
            <tr>
                <td><label>Sitio</label></td>
                <td><input type="text" name="sitio" id='sitio' value=""/></td>
                <td> <label>Acr&oacute;nimo</label></td>
                <td><input type="text" name="acronimo" id='acronimo' value=""/></td>
            </tr>
            <tr>
                <td><label>Localidad</label></td>
                <td><input type="text" name="localidad" id='localidad' value=""/></td>
                <td><label>Provincia</label></td>
                <td><input type="text" name="provincia" id='provincia' value=""/>
            </tr>
            <tr>
                <td><label>Pa&iacute;s</label></td>
                <td><input type="text" name="pais" id='pais' value=""/></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="4">Coordenadas</td>
            </tr>
            <tr>
                <td><label>Latitud</label></td>
                <td><input type="text" name="latitud" value="" id="latitud"/></td>
                <td><label>Longitud</label></td>
                <td><input type="text" name="longitud" value="" id="longitud"/></td>
            </tr>
            <tr>
                <td><label>Precisi&oacute;n</label></td>
                <td><select name="precision">
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
                <td><input type="text" name="periodo" value=""/></td>

                <td><label>Dataciones</label></td>
                <td>
                    <select name="dataciones">
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
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
                <td><label>Sobrehueso</label></td>
                <td>
                    <select name="sobrehueso">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>