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
            <title>Nuevo Registro</title>
            <link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.8.16.custom.css"/>
            <link rel="stylesheet" type="text/css" href="css/listar.css"/>
            <link rel="stylesheet" type="text/css" href="css/menuv.css"/>
            <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
            <link rel="stylesheet" type="text/css" href="css/quearrow.css"/>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <script src="js/jquery-1.5.1.min.js"></script>
            <script src="js/jquery-ui-1.8.14.custom.min.js"></script>
            <script src="js/formularios.js"></script>
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
                        <?php include("menuvertical.php"); ?>
                        <?php include 'contacto.php'; ?>
                    </div> <!--FIN MENU LATERAL: menuv-->
                    <div id="derecha_contenedor">
                        <div id="div_mensaje">
                            <form action="grabar.php" method="post" id="formu" enctype="multipart/form-data">
                                <div id="div_oseo">
                                    <?php include '_formparte1.php'; ?>
                                    <?php include '_formparte2.php'; ?>
                                    <?php include '_formparte3.php'; ?>
                                <table>
                                    <tr>
                                        <td><input  style="width: 50%;" type="button" class="boton" name="Grabar" id="enviar" value="Grabar Registro" /></td>
                                    </tr>
                                </table>
                                </div>
                            </form>
                        </div> <!--FIN DERECHA CONTENEDOR-->
                    </div><!--FIN contenido-->

                </div> <!--FIN principal-->

                <div id="pie">
                    <?php //include("pie.php");  ?>
                </div><!--FIN pie-->
            </div>
        </body>
    </html>
<?php
}
?>