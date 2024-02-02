<?php

/*error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.

ini_set("error_log", "/xampp/htdocs/GUARANDAHD/php-error.log");
error_log( "Iniciando Aplicacion WEB" );*/

    require_once("config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>
<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="public/img/imagen/logomin.png">
	<title>Help-Desk :: Guaranda</title>
   
	<!--<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">-->

    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body class='login-page register-page'>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
            
                <form class="sign-box" action="" method="post" id="login_form">
                    
                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <div class="" >
                        <img src="public/logogrande.jpg" height="75px" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title" id="lbltitulo">Acceso Usuario</header>

                    <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            El Usuario y/o Contraseña son incorrectos.
                                        </div>
                                    <?php
                                break;

                                case "2";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            Los campos estan vacios.
                                        </div>
                                    <?php
                                break;
                            }
                        }
                    ?>

                    <div class="form-group">
                        <input type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Password"/>
                    </div>
                    <div>
                        <div class="row">
                            <div class=" col-lg-12 text-center">
                            <fieldset class="form-group">
                                <a href="#" id="btnsoporte" ><i class="fa fa-cogs mr-5"></i>  Acceso Soporte</a>
                            </fieldset>
                            </div>
                            <div class=" col-lg-5">
                            <fieldset class="form-group">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="Registrarse/"><i class="fa fa-plus mr-5"></i> Registrarse</a>
                            </fieldset>
                            </div>
                            <div class=" col-lg-7">
                            <fieldset class="form-group">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="RecuperarContrasena/"><i class="fa fa-warning mr-5"></i> Olvide mi Contraseña</a>
                            </fieldset>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" name="enviar" value="si" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="fa fa-sign-in mr-10"></i> Iniciar Sesión 
                                        </button>
                    <!--<input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded btn-blue">Acceder</button>-->
                </form>
            </div>
        </div>
    </div>

<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
<script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<script src="public/js/app.js"></script>
<script type="text/javascript" src="index.js"></script>

</body>
</html>