// Borrar un registro haciendo click en eliminar registro.
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

// Ajax para traer los resultados
jQuery.fn.listarResultados = function(pagina) {
    $.ajax({
        url: 'listar.php',
        type: 'post',
        data: {
            min : pagina
        },
        success : function(data){
            $('#resultados').html(data);
            $("#menuverticaldiv a").button();
            $('#nuevoregistro').button();
        }
    });
}

/**
 * Paginador
 */
jQuery.fn.getPaginador = function(){
    $.ajax({
        url: 'paginador.php',
        type: 'post',
        dataType: 'json',
        success : function(data){
            $("#paginador").paginate({
                count : data.totalPag,
                start 	: 1,
                display : 7,
                border : true,
                border_color : '#0a3e05',
                text_color : '#fff',
                background_color : '#327e04',	
                border_hover_color : '#ccc',
                text_hover_color : '#000',
                background_hover_color : '#fff', 
                images : false,
                mouse : 'press',
                onChange : function(page){
                    $(this).listarResultados(page) ;
                }
            });    
        }
    });
}
    
/**
* Load windows
*/
$(window).load(function () {
    // Links a editar y divs para eliminar transformados a botones jQuery UI
    $("#menuverticaldiv a").button();

    // Eliminar todos los registros marcados
    $('#eliminarmarcados').live('click',function(){
        // Arreglo con los id a borrar
        var arreglo = Array();
        // REcorro todos los checks
        $('.checks').each(function(){
            if ($(this).attr('checked'))
            {
                // Agrego el id del que está chequeado
                arreglo.push($(this).attr('id'));
            }
        });
        // Borro solo si la longitud es mayor a 0
        if (arreglo.length > 0)
        {
            var div = $('<div></div>').attr('id','dialog-confirm').attr('title',"Borrar Registros");
            div.html("Deseas eliminar los registros seleccionados<img src='img/Help and Support16.png'/>");
            div.dialog({
                resizable: false,
                modal: true,
                buttons: {
                    "Borrar": function() {
                        $(this).dialog( "close" );
                        $.ajax({
                            url: "eliminarmarcados.php",
                            type: 'post',
                            data : {
                                arreglo: arreglo
                            },
                            success: function(){
                                var nom;
                                for (i=0; i<arreglo.length; i++){
                                    nom = "#renglon" + arreglo[i].toString();
                                    $(nom).remove();
                                }
                                $(this).getPaginador();
                                $('#checkall').attr('checked',false);
                            }
                        });
                    },
                    Cancelar: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });
        }
    });
    
    // Habilita/deshabilita el borrar si uno de los checks simples completa/descompleta la lista de checks
    $('.checks').live('click',function(){
        if ($(this).is(':checked')){
            var algo = true;
            $('.checks').each(function(){
                if (!$(this).is(':checked'))
                {
                    //alert("soy especial");
                    algo = false;
                }
            });
            if (algo)
                $('#checkall').attr('checked',true);
        }
        else{
            $('.checks').each(function(){
                if ($(this).attr('checked'))
                {
                    return false;
                }
            });
            $('#checkall').attr('checked',false);
        }
    })
    
    // Pone todos los checks en true o false según estaba el estado anterior.
    $('#checkall').live('click',function(){
        if ($('#checkall').is(':checked'))
        {
            $('.checks').each(function(){
                $(this).attr('checked',true);
            })
        }
        else
        {
            $('.checks').each(function(){
                $(this).attr('checked',false);
            })
        }
    });
    // Paginador
    $(this).getPaginador();
    // Primer listado
    $(this).listarResultados(1) ;
    
});