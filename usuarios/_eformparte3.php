<div id="form_contenido3">
    <table>
        <tr>
            <td width="80%"><label class="formu_titulo">Datos de Ingreso, Ubicaci&oacute;n y Egreso</label></td>
            <td width="10%"><label id="mas3"><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom"/></label></td>
            <td width="10%"><label id="menos3"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido3_oculto">
        <table>
            <tr>
                <td><label>Fecha de Ingreso</label></td>
                <td><input type="text" name="fecha_ingreso" value="<?php echo $renglon['fecha_ingreso'] ?>" id="datepicker3"/></td>
                <td><label>Fecha de Salida</label></td>
                <td><input type="text" name="fecha_salida" value="<?php echo $renglon['fecha_salida'] ?>" id="datepicker4"/></td>
            </tr>
            <tr>
                <td><label>Forma de Ingreso</label></td>
                <td>
                    <select name="forma_ingreso">
                        <option value="<?php echo $renglon['forma_ingreso'] ?>"><?php echo $renglon['forma_ingreso'] ?></option>
                        <option value="Excavaci&oacute;n">Excavaci&oacute;n</option>
                        <option value="Donaci&o&oacute;n">Donaci&oacute;n</option>
                        <option value="Pr&eacute;stamo">Pr&eacute;stamo</option>
                        <option value="Rescate">Rescate</option>
                    </select>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="4"><label>Tipo de Material</label></td>
            </tr>
            <tr>
                <td><label>Restos Humanos</label></td>
                <td><input type="text" name="restos_humano" value="<?php echo $renglon['restos_humano'] ?>"/></td>
                <td><label>Otros Restos</label></td>
                <td><input type="text" name="otros_restos" value="<?php echo $renglon['otros_restos'] ?>"/></td>
            </tr>
            <tr>
                <td><label>N&uacute;mero de cajas</label></td>
                <td><input type="text" name="numero_caja" value="<?php echo $renglon['numero_caja'] ?>"/></td>
                <td><label>Sala</label></td>
                <td><input type="text" name="sala" value="<?php echo $renglon['sala'] ?>"/></td>
            </tr>
            <tr>
                <td><label>Estanter&iacute;a</label></td>
                <td><input type="text" name="estanteria" value="<?php echo $renglon['estanteria'] ?>"/></td>
                <td><label>Plano</label></td>
                <td> <input type="text" name="plano" value="<?php echo $renglon['plano'] ?>"/></td>
            </tr>
            <tr>
                <td colspan="4">Responsable</td>
            </tr>
            <tr>
                <td><label>Responsable Registro</label></td>
                <td><input type="text" name="res_registro" value="<?php echo $renglon['res_registro'] ?>"/></td>
                <td><label>Responsable Conservacion</label></td>
                <td><input type="text" name="res_conservacion" value="<?php echo $renglon['res_conservacion'] ?>"/></td>
            </tr>
            <tr>
                <td><label>Responsable Digitalizaci&oacute;n</label></td>
                <td><input type="text" name="res_digitalizacion" value="<?php echo $renglon['res_digitalizacion'] ?>"/></td>
                <td><label>Responsable Bodegaje</label></td>
                <td><input type="text" name="res_bodegaje" value="<?php echo $renglon['res_bodegaje'] ?>"/></td>
            </tr>
            <tr>
                <td colspan="1"><label>Observaci&oacute;nes</label></td>
                <td colspan="3"><textarea name="observaciones" style="width: 75%;height: 4em; border: 1px solid #999;" ><?php echo $renglon['observaciones'] ?></textarea></td>
            </tr>
        </table>
    </div>
</div>