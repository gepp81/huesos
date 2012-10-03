function borrar(num)
{
    var div = $('<div></div>').attr('id','dialog-confirm').attr('title','Borrar Registro');
    div.html("Deseas eliminar el registro N&deg; " + num + "<img src='img/Help and Support16.png'/>");
    // style="width: auto; min-height: 0px; height: 50px; "
    div.dialog({
        resizable: false,
        modal: true,
        buttons: {
            "Borrar": function() {
                $(this).dialog( "close" );
                window.location = "eliminar_registro.php?num="+num;
            },
            Cancelar: function() {
                $( this ).dialog( "close" );
            }
        }
    });
}

jQuery.fn.crearInput = function(campo){
    var selecc = $('<select></select>').attr('id', 'buscarS'+ valor.toString()).attr('name', 'buscarS'+ valor.toString()).addClass('buscarI');    
    var campos;
    switch (campo){
        case 'precision' :
            campos = ["No","Aproximada","Exacta"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'dataciones':
            campos = ["No","14C","AMS"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).text(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'material_asociado':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'sobrehueso':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;            
        case 'tipo_sepultura':
            campos = ["Huesos Aislados","Osario","Sepultura Secundaria","Sepultura Secundaria","Cremación","Esqueleto Articulado"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'sexo':
            campos = ["Indefinido","Femenino","Masculino"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'edad':
            campos = [["Infantil","Infantil (0-11 a&ntilde;os)"],["Sub-Adulto","Sub-Adulto (12-19 a&ntilde;os)"],["Adulto Joven","Adulto Joven (20-34 a&ntilde;os)"],["Adulto Medio","Adulto Medio (35-49 a&ntilde;os)"],["Adulto Mayor","Adulto Mayor (+50 a&ntilde;os)"]];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i][0]).html(campos[i][1]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'grado_integridad':
            campos = ["<25%",">25% - <75%",">75%"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'estado_preservacion':
            campos = ["No se conoce","Malo","Regular","Bueno"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'rel_pato_esqueleto':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'tratamiento_conservacion':
            campos = ["Ausente","Presente"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;            
        case 'rel_pato_masticatorio':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'elementos_asociados':
            campos = ["Ninguno","Cajón","Otros Restos","Sin Condición de Análisis","Vestimenta Asociada"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;            
        case 'otros_asociados':
            campos = ["Ninguno","Cajón","Otros Restos","Sin Condición de Análisis","Vestimenta Asociada"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'vestimenta_asociada':
            campos = ["Ninguno","Cajón","Otros Restos","Sin Condición de Análisis","Vestimenta Asociada"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'estudios_realizados':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'registro_fotografico':
            campos = ["No","Si"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i]).html(campos[i]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        case 'forma_ingreso':
            campos = ["Excavación","Donación","Préstamo","Rescate"];
            for (i=0; i<campos.length ; i++ ){
                opcion = $('<option></option>').attr('value',campos[i][0]).html(campos[i][1]);
                selecc.append(opcion);
            }
            return selecc;
            break;
        default :
            var input = $('<input></input>').attr('value','').html('').addClass('buscarI');
            return input;
    }
}

jQuery.fn.seleccionar = function(valor, campos){
    var selecc = $('<select></select>').attr('id', 'buscarS'+ valor.toString()).attr('name', 'buscarS'+ valor.toString()).addClass('buscarS');
    var opcion;
    for (i=0; i<campos.length ; i++ ){
        opcion = $('<option></option>').attr('value',campos[i][0]).html(campos[i][1]);
        selecc.append(opcion);
    }
    return selecc;
//valor++;
};


$(document).ready(function(){
    valor = 1;
    opcionesBus = [["sitio","Sitio"],["acronimo","Acr&oacute;nimo"],["localidad","Localidad"],["provincia","Provincia"],["pais","Pa&iacute;s"],
    ["periodo","Periodo"],["latitud","Latitud"],["longitud","Longitud"],["dataciones","Dataciones"],["material_asociado","Material Asociado"],
    ["sobrehueso","Sobrehueso"],["sala","Sala"],["estanteria","Estanter&iacute;a"],["plano","Plano"],
    ["otros_restos","Otros Restos"],["forma_ingreso","Forma Ingreso"],["res_registro","Responsable Registro"],
    ["res_conservacion","Responsable Conservaci&oacute;n"],["res_digitalizacion","Responsable Digitalizaci&oacute;n"],
    ["res_bodegaje","Responsable Bodegaje"],["observaciones","Observaciones"],["arqueologo_responsable","Arque&eacute;ologo Responsable"],
    ["fecha_inicio","Fecha Inicio"],["fecha_finalizacion","Fecha Finalizaci&oacute;n"],["ente_responsable","Ente Responsable"],
    ["tipo_sepultura","Tipo Sepultura"],["sexo","Sexo"],["edad","Edad"],["anios","A&ntilde;os"],
    ["grado_integridad","Grado Integridad"],["numero_elementos","N&uacute;mero de Elementos"],
    ["estado_preservacion","Estado de Preservaci&oacute;n"],["tratamiento_conservacion","Tratamiento de conservaci&oacute;n"],
    ["rel_pato_esqueleto","Relevamientos de Patolog&iacute;as en Esqueleto"],
    ["estudios_realizados","Estudios Realizados"],
    ["rel_pato_masticatorio","Relevamientos de Patolog&iacute;as en el Aparato Masticatorio"],
    ["elementos_asociados","Elementos Asociados"],["otros_asociados","Otros Asociados"],
    ["vestimenta_asociada","Vestimenta Asociada"],["inventario_osteologico","Inventario Osteol&oacute;gico"],
    ["registro_fotografico","Registro Fotogr&acute;fico"],["referencia_bibliograficas","Referencia bibliogr&aacute;ficas"]];
    
    $('#1 .tdizq').append($(this).seleccionar(valor, opcionesBus));
    $('#1 .tdder').append($(this).crearInput('sitio'));
    $('#1 .tddel').append($('<label></label>').addClass('delCampo').html('Eliminar').attr('id',1));

    $('.buscarS').live('change',function(){
        var padre = $(this).parent();
        $('#' + padre.attr('id') + ' .tdder').empty();
        $('#' + padre.attr('id') + ' .tdder').append($(this).crearInput($(this).val()));
    })
    
    $('#formaddbus').click(function(){
        var numero =  parseInt($('#tdatos tr:last').attr('id'));
        numero++;
        numero = numero.toString();
        var tr = $('<tr></tr>').attr('id',numero).addClass('trrenglon' + numero.toString());
        var tdl = $('<td></td>').addClass('tdizq').attr('id', numero).append($(this).seleccionar(valor, opcionesBus));
        var tdd = $('<td></td>').attr('align','left').addClass('tdder').attr('id', numero).append($(this).crearInput($(this).val()));
        var tdel = $('<td></td>').attr('id', numero);
        tdel.append($('<label></label>').addClass('delCampo').html('Eliminar').attr('id',numero));
        tr.append(tdl).append(tdd).append(tdel);
        $('#tdatos').append(tr);
    });
    // Boton de agregar búsqueda
    $('#formaddbus').button({
        icons: {
            primary: "ui-icon ui-icon-plusthick"
        }
    });
    // Elimina un campo de busqueda
    $('.delCampo').live('click',function(){
        var cant = $('#tdatos .delCampo').length;
        if (cant > 1){
            var clase = 'trrenglon' + $(this).attr('id').toString();
            $("."+clase).remove();
        }
    });
    // Menú izquierodo con forma de botones
    $("#menuverticaldiv a").button();   
    // Botón de buscar.
    $('#formsubmit').button({
        icons: {
            primary: "ui-icon ui-icon-search"
        }
    });
    // Botón buscar evento click.
    $('#formsubmit').click(function(){
        var estado = true;
        var seleArr = Array();
        var inpArr = Array();
        $('.buscarS').each(function(){
            if ( -1 != seleArr.indexOf($(this).val())){
                var div = $('<div></div>').attr('id','dialog-confirm').attr('title','Hay Campos Repetidos');
                div.html("Hay campos repetidos,  modifique la búsqueda o elimínelos de la misma.");
                div.dialog({
                    resizable: false,
                    modal: true,
                    buttons: {
                        Volver: function() {
                            $( this ).dialog( "close" );
                        }
        
                    }
                })
                estado = false;
                return false;                    
            }
            else {
                seleArr.push($(this).val());
            }   
        });
        if (!estado){
            return false;
        }
        $('.buscarI').each(function(){
            if ( $(this).val() != '' ){
                inpArr.push($(this).val());
            }
            else
            {
                var div = $('<div></div>').attr('id','dialog-confirm').attr('title','Hay Campos Vacios');
                div.html("Uno de los valores esta vacio, complete el campo o elimínelo de la búsqueda");
                div.dialog({
                    resizable: false,
                    modal: true,
                    buttons: {
                        Volver: function() {
                            $( this ).dialog( "close" );
                        }
        
                    }
                })
                estado = false;
                return false;
            }
        });       
        if (!estado){
            return false;
        }
        $.ajax({
            url: 'listarBusqueda.php',
            type: 'post',
            //                contentType : 'utf8',
            data: {
                min : 10,
                campos : seleArr,
                valores : inpArr
            },
            success : function(data){
                $('#resultados').html(data);
                $("#menuverticaldiv a").button();
            }
        });
    });
    
   
    /**
     * Presionar enter en los formularios de busqueda
     */
    $("#formbusqueda").keypress(function(e) {
        if(e.keyCode == 13) {
            $('#formsubmit').click();
            return false;
        }
    });

    
})