<div id="form_contenido2">
    <table>
        <tr>
            <td width="80%"><label class="formu_titulo">Excavaci&oacute;n</label></td>
            <td width="10%" ><label id="mas2"><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom"/></label></td>
            <td width="10%" ><label id="menos2"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido2_oculto">
        <table>
            <tr>
                <td><label>Arque&oacute;logo Responsable</label></td>
                <td><input type="text" name="arqueologo_responsable" value=""/></td>
                <td><label>Ente Responsable de la Excavaci&oacute;n</label></td>
                <td><input type="text" name="ente_responsable" value=""/></td>
            </tr>
            <tr>
                <td><label>Fecha de Inicio</label></td>
                <td><input type="text" name="fecha_inicio" value="" id="datepicker1"/></td>
                <td><label>Fecha de Finalizacion</label></td>
                <td><input type="text" name="fecha_finalizacion" value="" id="datepicker2"/></td>
            </tr>
            <tr>
                <td colspan="4"><label>Notas Arqueol&oacute;gicas</label></td>
            </tr>
            <tr>
                <td><label>N&uacute;mero Registro Arqueol&oacute;gico</label></td>
                <td><input type="text" name="numero_reg_arq" value=""/></td>
                <td><label>Tipo Sepultura</label></td>
                <td>
                    <select name="tipo_sepultura">
                        <option value="Huesos Aislados">Huesos Aislados</option>
                        <option value="Osario">Osario</option>
                        <option value="Sepultura Secundaria">Sepultura Secundaria</option>
                        <option value="Cremaci&o&oacute;n">Cremaci&oacute;n</option>
                        <option value="Esqueleto Articulado">Esqueleto Articulado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Sexo</label></td>
                <td>
                    <select name="sexo">
                        <option value="Indefinido">Indefinido</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </td>
                <td><label>Edad</label></td>
                <td>
                    <select name="edad">
                        <option value="Infantil (0-11 a&ntilde;os)">Infantil (0-11 a&ntilde;os)</option>
                        <option value="Sub-Adulto (12-19 a&ntilde;os)">Sub-Adulto (12-19 a&ntilde;os)</option>
                        <option value="Adulto Joven (20-34 a&ntilde;os)">Adulto Joven (20-34 a&ntilde;os)</option>
                        <option value="Adulto Medio (35-49 a&ntilde;os)">Adulto Medio (35-49 a&ntilde;os)</option>
                        <option value="Adulto Mayor (+50 a&ntilde;os)">Adulto Mayor (+50 a&ntilde;os)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>A&ntilde;os</label></td>
                <td><input type="text" name="anios" value=""/></td>
                <td><label>Grado de Integridad</label></td>
                <td>
                    <select name="grado_integridad">
                        <option value="<25%"><25%</option>
                        <option value=">25% - <75%">>25% - <75%</option>yyyyyy
                        <option value=">75%">>75%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Estado de Preservaci&oacute;n</label></td>
                <td>
                    <select name="estado_preservacion">
                        <option value="No se conoce">No se conoce</option>
                        <option value="Malo">Malo</option>
                        <option value="Regular">Regular</option>
                        <option value="Bueno">Bueno</option>
                    </select>
                </td>
                <td>       <label>Relevamientos de Patolog&iacute;as en Esqueleto</label></td>
                <td>
                    <select name="rel_pato_esqueleto">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>N&uacute;mero de Elementos Oseos</label></td>
                <td><input type="text" name="numero_elementos" value=""/></td>
                <td><label>Tratamiento de Conservaci&oacute;n</label></td>
                <td>
                    <select name="tratamiento_conservacion">
                        <option value="Ausente">Ausente</option>
                        <option value="Presente">Presente</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Relevamientos de Patolog&iacute;as en el Aparato Masticatorio</label></td>
                <td>
                    <select name="rel_pato_masticatorio">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
                <td><label>Elementos Asociados</label></td>
                <td>
                    <select name="elementos_asociados">
                        <option value="Ninguno">Ninguno</option>
                        <option value="Caj&oacute;n">Caj&oacute;n</option>
                        <option value="Otros Restos">Otros Restos</option>
                        <option value="Sin Condici&oacute;n de An&aacute;lisis">Sin C&oacute;ndicion de An&aacute;lisis</option>
                        <option value="Vestimenta Asociada">Vestimenta Asociada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Otros Asociados</label></td>
                <td>
                    <select name="otros_asociados">
                        <option value="Ninguno">Ninguno</option>
                        <option value="Caj&oacute;n">Caj&oacute;n</option>
                        <option value="Otros Restos">Otros Restos</option>
                        <option value="Sin Condici&oacute;n de An&aacute;lisis">Sin C&oacute;ndicion de An&aacute;lisis</option>
                        <option value="Vestimenta Asociada">Vestimenta Asociada</option>
                    </select>
                </td>
                <td><label>Vestimenta Asociada</label></td>
                <td>
                    <select name="vestimenta_asociada">
                        <option value="Ninguno">Ninguno</option>
                        <option value="Caj&oacute;n">Caj&oacute;n</option>
                        <option value="Otros Restos">Otros Restos</option>
                        <option value="Sin Condici&oacute;n de An&aacute;lisis">Sin C&oacute;ndicion de An&aacute;lisis</option>
                        <option value="Vestimenta Asociada">Vestimenta Asociada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label>Inventario Osteol&oacute;gico (Esquema)</label></td>
                <td colspan="2"><input type="file" name="inventario_osteologico" value=""/></td>
            </tr>
            <tr>
                <td><label>Estudios Realizados</label></td>
                <td>
                    <select name="estudios_realizados">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
                <td><label>Registro Fotogr&aacute;fico</label></td>
                <td>
                    <select name="registro_fotografico">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="1"><label>Referencia Bibliogr&aacute;ficas</label></td>
                <td colspan="3"><textarea name="referencia_bibliograficas" style="width: 75%;height: 4em; border: 1px solid #999;" ></textarea></td>
            </tr>
        </table>
    </div>
</div>