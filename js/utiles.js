/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* Borrar elemento */
$(window).load(function () {
    $('#liusuario').button({
        icons: {
            primary:'ui-icon ui-icon-person'
        }
    });
    $('#liclave').button({
        icons: {
            primary:'ui-icon ui-icon-locked'
        }
    });
    $('#formu a').button({
        icons: {
            primary:'ui-icon ui-icon-pencil'
        }
    });
    $('#enviar').button({
        icons: {
            primary:'ui-icon ui-icon-check'
        }
    });
    //ui-icon ui-icon-check    

    $("#enviarreg").click(function() {
        var positivo = true;
        var mensaje = "";
        var num = '';
        num = $('#nombrereg').val();
        if ( !(num.length > 5) )
        {
            positivo = false;
            mensaje+= "<li>El nombre de usuario debe tener al menos 6 caracteres</li>";
        }
        num = $('#pass1').val();
            
        if ( !(num.length > 5) )
        {
            positivo = false;
            mensaje+= "<li>La clave debe ser de al menos 6 caracteres</li>";
        }
        num = $('#pass2').val();
        if ( !(num.length > 5) )
        {
            positivo = false;
            mensaje+= "<li>Una o ambas claves est&aacute;n vac&iacute;as</li>";
        }
        if ( $('#pass1').val() != $('#pass2').val())
        {
            positivo = false;
            mensaje+= "<li>Las claves nos concuerdan</li>";
        }
        if (positivo)
        {
            var md1= SHA1($('#pass1').val());
            $('#passsha1').val(md1);
            var md2= SHA1($('#pass2').val());
            $('#passsha2').val(md2);
            $("#formu").submit();
        }
        else {
            $("#div_botones").html(mensaje);
        }
    });
    
    $(function() {
        $("#enviar").click(function() {
            var md1= SHA1($('#pass').val());
            $('#passsha1').val(md1);
            $("#formu").submit();
        });
    });
    $(function() {
        $("#buscar").click(function() {
            $("#formu_busqueda").submit();
        });
    });

    

});