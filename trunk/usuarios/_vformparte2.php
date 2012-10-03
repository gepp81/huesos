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
                <td><label class="labelnegro"><?php echo htmlentities($renglon['arqueologo_responsable']) ?></td>
                <td><label>Ente Responsable de la Excavaci&oacute;n</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['ente_responsable']) ?></td>
            </tr>
            <tr>
                <td><label>Fecha de Inicio</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['fecha_inicio']) ?></td>
                <td><label>Fecha de Finalizacion</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['fecha_finalizacion']) ?></td>
            </tr>
            <tr>
                <td colspan="4"><label>Notas Arqueol&oacute;gicas</label></td>
            </tr>
            <tr>
                <td><label>N&uacute;mero Registro Arqueol&oacute;gico</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['numero_reg_arq']) ?></td>
                <td><label>Tipo Sepultura</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['tipo_sepultura']) ?></label></td>
            </tr>
            <tr>
                <td><label>Sexo</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['sexo']) ?></label></td>
                <td><label>Edad</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['edad']) ?></label></td>
            </tr>
            <tr>
                <td><label>A&ntilde;os</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['anios']) ?></td>
                <td><label>Grado de Integridad</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['grado_integridad']) ?></label></td>
            </tr>
            <tr>
                <td><label>Estado de Preservaci&oacute;n</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['estado_preservacion']) ?></label></td>
                <td><label>Relevamientos de Patolog&iacute;as en Esqueleto</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['rel_pato_esqueleto']) ?></label></td>
            </tr>
            <tr>
                <td><label>N&uacute;mero de Elementos Oseos</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['numero_elementos']) ?></td>
                <td><label>Tratamiento de Conservaci&oacute;n</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['tratamiento_conservacion']) ?></label></td>
            </tr>
            <tr>
                <td><label>Relevamientos de Patolog&iacute;as en el Aparato Masticatorio</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['rel_pato_masticatorio']) ?></label></td>
                <td><label>Elementos Asociados</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['elementos_asociados']) ?></label></td>
            </tr>
            <tr>
                <td><label>Otros Asociados</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['otros_asociados']) ?></label></td>
                <td><label>Vestimenta Asociada</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['vestimenta_asociada']) ?></label></td>
            </tr>
            <?php if ($renglon['inventario_osteologico'] != "") : ?>
                <tr><td colspan="4"><label>Inventario Osteol&oacute;gico (Esquema)</label></td></tr>
                <tr>
                    <td colspan="4"><img src="esquemas/<?php echo htmlentities($renglon['inventario_osteologico']) ?>" style="width: 100%; height: 500px;"/></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td><label>Estudios Realizados</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['estudios_realizados']) ?></label></td>
                <td><label>Registro Fotogr&aacute;fico</label></td>
                <td><label class="labelnegro"><?php echo htmlentities($renglon['registro_fotografico']) ?></label></td>
            </tr>
            <tr>
                <td colspan="1"><label>Referencia Bibliogr&aacute;ficas</label></td>
                <td colspan="3"><label class="labelnegro"><?php echo htmlentities($renglon['referencia_bibliograficas']) ?></label></td>
            </tr>
        </table>
    </div>
</div>