<?php
session_start();
if (!isset($_SESSION['nombreusuario'])) {
    header("Location: salir.php");
    exit;
} else {
    ?>        
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta http-equiv="content-language" content="es" />
            <link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.8.16.custom.css"/>
            <link rel="stylesheet" type="text/css" href="css/listar.css"/>
            <link rel="stylesheet" type="text/css" href="css/menuv.css"/>
            <link rel="stylesheet" type="text/css" href="css/quearrow.css"/>
            <link rel="stylesheet" type="text/css" href="js/jPaginate/css/style.css"/>
            <link rel="stylesheet" type="text/css" href="css/busquedas.css"/>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <script src="js/jquery-1.5.1.min.js"></script>
            <script src="js/jquery-ui-1.8.14.custom.min.js"></script>
            <script type="text/javascript" src="js/gmap3.min.js"></script>
            <script src="js/busquedas_map.js" type="text/javascript"></script>
        </head>
        <body>
            <div id="principal">
                <div id="encabezado">
                    <div id="logo">
                    </div>
                    <div id="titulo">
                        <?php include("encabezado.php"); ?>
                    </div>
                </div><!--encabezado-->
                <div id="contenido"> <!--En contenido va lo del centro de la pagina: Menu presentacion y fotos derecha y la direccion izq.abajo-->
                    <div class="menuv">  <!--para el menu lateral-->
                        <?php include 'menuvertical.php' ?>
                        <?php include 'contacto.php'; ?>
                    </div> <!--FIN MENU LATERAL: menuv-->
                    <div id="derecha_contenedor">
                        <div>
                            <form id="formbusqueda">
                                <table id="tdatos">
                                    <tr style="text-align: center;">
                                        <th style="width: 60%">Campo de B&uacute;squeda</th>
                                        <th style="width: 30%">Valor a buscar</th>
                                        <th style="width: 10%"></th>
                                    </tr>
                                    <tr id="1" class="trrenglon1">
                                        <td class="tdizq" id="1"></td>
                                        <td class="tdder" id="1"></td>
                                        <td class="tddel" id="1"></td>
                                    </tr>
                                </table>
                                <br/>
                                <table id="tbotones" style="text-align: center;">
                                    <tr>
                                        <td style="width: 50%"><span id="formaddbus">Agrega campo de b&uacute;queda</span></td>
                                        <td style="width: 50%"><span id="formsubmit"/>Buscar</td>
                                    </tr>                
                                </table>
                            </form>
                        </div>
                        <div id="mapa" style="height: 600px; width: 100%;">
                            <table>
                                <tr>
                                    <td>
                                        <label>Aquellos registros que no tengan los valores de latitud y longitud definidos no ser&aacute;n mostrados.</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="informacion"></div>
                        <hr/>
                    </div> <!--FIN DERECHA CONTENEDOR-->
                </div><!--FIN contenido-->
                <div id="pie">
                    <?php //include("pie.php");   ?>
                </div><!--FIN pie-->
            </div> <!--FIN principal-->
        </body>        
    </html>
<?php } ?>