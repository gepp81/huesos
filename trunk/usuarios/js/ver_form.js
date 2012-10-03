$(window).load(function () {
    $('#menuverticaldiv a').button();
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
    $(this).getMapa();
});