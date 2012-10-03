jQuery.fn.cargarAutocomplete = function (opcion, id){
    var div = "#" + id;
    $.ajax({
        url: "get_datos.php?opcion=" + opcion,
        async: false,
        dataType: 'json',
        success: function(datos){
            $( div ).autocomplete({
                source: datos
            });
        }
    });
    return false;
}

$(window).load(function () {
    // run code

    $(this).cargarAutocomplete('provincias', 'provincia');
    $(this).cargarAutocomplete('acronimos', 'acronimo');
    $(this).cargarAutocomplete('ciudades', 'ciudad');
    $(this).cargarAutocomplete('paises', 'pais');
    $(this).cargarAutocomplete('localidades', 'localidad');

    $("#enviar").click(function() 
    {
        var positivo = true;
        var mensaje = "";
        if ( $("#numero_resumen").val() == "")
        {
            positivo = false;
            mensaje = "<li style='list-style-image: url(img/Warning16.png);'>N&uacute;mero Resumen est&aacute; vac&iacute;o.</li>";
        }
        if ( $('#numero_registro').val() == "")
        {
            positivo = false;
            mensaje+= "<li style='list-style-image: url(img/Warning16.png);'>N&uacute;mero Registro est&aacute; vac&iacute;o.</li>";
        }
        if (positivo)
        {
            $("#formu").submit();
        }
        else
        {
            var div = $('<div></div>').attr('id','dialog-confirm').attr('title','Hay campos incorrectos');
            div.html(mensaje);

            div.dialog({
                resizable: false,
                modal: true,
                buttons: {
                    Volver: function() {
                        $( this ).dialog( "close" );
                    }
        
                }
            })
        }
    });
    
    jQuery(function($){
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '&#x3c;Ant',
            nextText: 'Sig&#x3e;',
            currentText: 'Hoy',
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
            dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
            dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
    });
    

    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
    $("#datepicker4").datepicker();

    $("#latitud, #longitud").focusin(function(e){
        jQuery('<div/>', {
            id: 'mapa'
        }).appendTo($('body'));
        jQuery('<div/>', {
            id: 'mapaflotante'
        }).appendTo($('#mapa'));    

        var flo = $('#mapa');
        flo.css('position','absolute');
        flo.css('display','inline!important');
        flo.css('width','400');
        flo.css('height','400');
        var pos = $('#latitud').offset();
        flo.css( {
            top: pos.top+20, 
            left: pos.left+20
        } );

        var options = {
            zoom: 9
            , 
            center: new google.maps.LatLng(-36.992650, -56.5550510)
            , 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('mapaflotante'), options);
        //map.addControl(new GLargeMapControl());
       
        google.maps.event.addListener(map, 'click', function(event)
        {
            var lat = event.latLng.lat();
            $('#latitud').attr('value', lat)
            var lng = event.latLng.lng();
            $('#longitud').attr('value', lng);
            var flo = $('#mapa');
            $('#mapaflotante').remove();
            flo.remove();
        });        
        
        $(this).after($(body));
    });
    $("#latitud, #longitud").focusout(function(e)
    {
        var flo = $('#mapa');
        $('#mapaflotante').remove();
        flo.remove();
    }); 

    $("#form_contenido1_oculto").show();
    $("#form_contenido2_oculto").hide();
    $("#form_contenido3_oculto").hide();

    $("#mas1").click(function(){
        $("#form_contenido1_oculto").show();
    });
    $("#mas2").click(function(){
        $("#form_contenido2_oculto").show();
    });
    $("#mas3").click(function(){
        $("#form_contenido3_oculto").show();
    });
    $("#menos1").click(function(){
        $("#form_contenido1_oculto").hide();
    });
    $("#menos2").click(function(){
        $("#form_contenido2_oculto").hide();
    });
    $("#menos3").click(function(){
        $("#form_contenido3_oculto").hide();
    });
    $("#menuverticaldiv a, #tbodyresultado a, #enviar").button();    
});