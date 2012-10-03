<?php
session_start();
if (!isset($_SESSION['nombreusuario'])) {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Huesos</title>
            <link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.8.16.custom.css"/>
            <link rel="stylesheet" href="css/quearrow.css" type="text/css" />
            <link rel="stylesheet" href="css/menuv.css" type="text/css" />
            <link rel="stylesheet" href="css/listar.css" type="text/css" />            
            <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
            <script src="js/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
            <script src="js/utiles.js" type="text/javascript"></script>
            <script src="js/sha1.js" type="text/javascript"></script>
        </head>
        <body>
            <div id="principal">
                <div id="encabezado">
                    <div id="logo">
                    </div>
                    <div id="titulo">
                        <?php include("encabezado.php"); ?><!--<img src="img/titulo.gif"/>-->
                    </div>
                </div><!--encabezado-->
                <div id="contenido"> <!--En contenido va lo del centro de la pagina: Menu presentacion y fotos derecha y la direccion izq.abajo-->
                    <div class="menuv">  <!--para el menu lateral-->
                        <?php include("menuvertical.php"); ?>
                        <div id="izqabajo">
                            <p class="textosnegrita">Ubicaci&oacute;n:</p>
                            <p>Unidad de Ense&ntilde;anza Universitaria Quequen Facultad de Ciencias Sociales (FACSO) UNCPBA</p>
                            <p class="textosnegrita">Direcci&oacute;n postal:</p>
                            <p>Calle 508 N&deg;:881 e/ 517 y 521 (7631) Quequ&eacute;n - Necochea</p>
                            <p class="textosnegrita">Tel&eacute;fono: </p><p>(Sede) 2262-45-0707</p>
                            <p class="textosnegrita">Contacto:</p><p>guichon@infovia.com.ar</p>
                            <p>leeh@quequen.unicen.edu.ar</p>
                        </div> <!-- Fin izq abajo-->
                    </div> <!--FIN MENU LATERAL: menuv-->
                    <div id="derecha_contenedor">
                        <div id="pagina">
                            <form action="registrar.php" method="post" id="formulario">
                                <table>
                                    <tr>
                                        <td colspan="3"><h2>Registrarse</h2></td>
                                    </tr>                                    
                                    <tr>
                                        <td>Este va a ser tu usuario</td>
                                        <td><input type="text" name="nombre_reg" id="nombrereg" maxlength="20"/></td>
                                        <td class='fontmenor'>El usuario debe tener al menos 6 caracteres.</td>
                                    </tr>
                                    <tr>
                                        <td>Esta va a ser tu clave</td>
                                        <td><input type="password" name="pass1_reg" id="pass1"/><input type="hidden" id="passsha1" name="passsha1"/></td>
                                        <td class='fontmenor'>La clave debe tener al menos 6 caracteres.</td>
                                    </tr>
                                    <tr>
                                        <td>Repita la clave</td>
                                        <td><input type="password" name="pass2" id="pass2"/><input type="hidden" id="passsha2" name="passsha2"/></td>                                        
                                        <td class='fontmenor'>La clave debe tener al menos 6 caracteres.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="color: red;"><div id="div_botones"></div></td>                                    
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td width="40"></td>
                                        <td width="33"><input type="button" name="enviarreg" id="enviarreg" value="Registrate"/></td>
                                        <td width="40"></td>
                                    </tr>
                                </table>
                            </form>

                        </div>
                    </div> <!--FIN DERECHA CONTENEDOR-->
                </div><!--FIN contenido-->
                <div id="pie">
                    <?php include("pie.php"); ?>
                </div><!--FIN pie-->
            </div> <!--FIN principal-->
        </body>
    </html>
    <?php
} else {
    header("Location: usuarios/huesos.php");
    exit;
}
?>