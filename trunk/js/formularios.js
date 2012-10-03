$(window).load(function () {
  // run code
$(function() {
    var availableTags = $.ajax({
                url: "get_datos.php?opcion=provincias",
                        async: false
                        }).responseText;
                        var available = availableTags.split("|||");
                        //alert(available[0]);
		$( "#provincia" ).autocomplete({
                        source: available
		});
    });
$(function() {
    var availableTags = $.ajax({
                url: "get_datos.php?opcion=acronimos",
                        async: false
                        }).responseText;
                        var available = availableTags.split("|||");
                        //alert(available[0]);
		$( "#acronimo" ).autocomplete({
                        source: available
		});
    });
  $(function() {
    var availableTags = $.ajax({
                url: "get_datos.php?opcion=ciudades",
                        async: false
                        }).responseText;
                        var available = availableTags.split("|||");
                        //alert(available[0]);
		$( "#ciudad" ).autocomplete({
                        source: available
		});
    });
  $(function() {
    var availableTags = $.ajax({
                url: "get_datos.php?opcion=paises",
                        async: false
                        }).responseText;
                        var available = availableTags.split("|||");
                        //alert(available[0]);
		$( "#pais" ).autocomplete({
                        source: available
		});
    });        
  $(function() {
    var availableTags = $.ajax({
                url: "get_datos.php?opcion=localidades",
                        async: false
                        }).responseText;
                        var available = availableTags.split("|||");
                        //alert(available[0]);
		$( "#localidad" ).autocomplete({
                        source: available
		});
    });    

    $(function() {
        $("#cancelar").click(function(){
            window.location = "huesos.php";
            });
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
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});
    

    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
    $("#datepicker4").datepicker();

    $("#latitud").focusin(function(e){
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
        var pos = $('#longitud').offset();
        flo.css( {top: pos.top, left: pos.left} );

        var options = {
                zoom: 9
                , center: new google.maps.LatLng(-36.992650, -56.5550510)
                , mapTypeId: google.maps.MapTypeId.ROADMAP
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


    $("#latitud").focusout(function(e){

        var flo = $('#mapa');
        $('#mapaflotante').remove();
        flo.remove();
    }); 
    
 /*   $("#longitud").focusin(function(e){
        jQuery('<div/>', {
            id: 'mapaflotante'
        }).appendTo($('body'));
        var flo = $('#mapaflotante');
        flo.css('position','absolute');
        flo.css('display','inline!important');
        flo.css('width','auto');
        var pos = $('#precision').offset();
        flo.css({top: pos.top, left: pos.left});
        $('#mapaflotante').css('visibility','visible');
        flo.append($('#mapaflotante').html());

        $(this).after($(body));
    }); 

    $("#longitud").focusout(function(e){

        var flo = $('#mapaflotante');
        $('#mapaflotante').css('visibility','hidden');
        flo.remove();
    });     
   */
   

});


   
   