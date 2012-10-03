<div id="form_contenido3">
    <table>
        <tr>
            <td width="80%"><label class="formu_titulo">Datos de Ingreso, Ubicaci&oacute;n y Egreso</label></td>
            <td width="10%" ><label id="mas3"><img src="img/zoom_in.png" title="Mostrar Campos" class="tdzoom"/></label></td>
            <td width="10%" ><label id="menos3"><img src="img/zoom_out.png" title="Ocultar Campos" class="tdzoom"/></label></td>
        </tr>
    </table>
    <div id="form_contenido3_oculto">
        <table>
            <tr>
                <td><label>Fecha de Ingreso</label></td>
                <td><label class="labelnegro"><?php echo $renglon['fecha_ingreso'] ?></label></td>
                <td><label>Fecha de Salida</label></td>
                <td><label class="labelnegro"><?php echo $renglon['fecha_salida'] ?></label></td>
            </tr>
            <tr>
                <td><label>Forma de Ingreso</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['forma_ingreso']) ?></label></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="4"><label>Tipo de Material</label></td>
            </tr>
            <tr>
                <td><label>Restos Humanos</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['restos_humano']) ?></label></td>
                <td><label>Otros Restos</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['otros_restos']) ?></label></td>
            </tr>
            <tr>
                <td><label>N&uacute;mero de cajas</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['numero_caja']) ?></label></td>
                <td><label>Sala</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['sala']) ?></label></td>
            </tr>
            <tr>
                <td><label>Estanter&iacute;a</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['estanteria']) ?></label></td>
                <td><label>Plano</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['plano']) ?></label></td>
            </tr>
            <tr>
                <td colspan="4">Responsable</td>
            </tr>
            <tr>
                <td><label>Responsable Registro</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['res_registro']) ?></label></td>
                <td><label>Responsable Conservacion</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['res_conservacion'])?></label></td>
            </tr>
            <tr>
                <td><label>Responsable Digitalizaci&oacute;n</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['res_digitalizacion']) ?></label></td>
                <td><label>Responsable Bodegaje</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['res_bodegaje']) ?></label></td>
            </tr>
            <tr>
                <td colspan="1"><label>Observaci&oacute;nes</label></td>
                <td colspan="3"><label  class="labelnegro"><?php echo htmlentities($renglon['observaciones']) ?></label></td>
            </tr>
        </table>
    </div>
</div>