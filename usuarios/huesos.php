<?php
session_start();
if (!isset($_SESSION['nombreusuario'])) {
    header("Location: salir.php");
    exit;
} else {
    ?>        
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Huesos</title>
            <link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.8.16.custom.css"/>
            <link rel="stylesheet" type="text/css" href="css/listar.css"/>
            <link rel="stylesheet" type="text/css" href="css/menuv.css"/>
            <link rel="stylesheet" type="text/css" href="css/quearrow.css"/>
            <link rel="stylesheet" type="text/css" href="js/jPaginate/css/style.css"/>
            <script src="js/jquery-1.5.1.min.js"></script>
            <script src="js/jquery-ui-1.8.14.custom.min.js"></script>
            <script src="js/utiles.js" type="text/javascript"></script>
            <script src="js/jPaginate/jquery.paginate.js" type="text/javascript"></script>
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
                        <div id="div_mensaje">
                            <?php if (isset($_SESSION['mensaje'])) : ?>
                                <?php echo "<p>" . $_SESSION['mensaje'] . "</p>" ?>
                                <?php unset($_SESSION['mensaje']) ?>
                            <?php endif; ?>
                        </div>
                        <div id="resultados"></div>
                        <div style="padding-left: 35%; width: 100%;">
                            <div id="paginador"></div>
                        </div>
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