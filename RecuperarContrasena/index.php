<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="../public/img/imagen/logomin.png">
	<title>Help-Desk :: Guaranda</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="../public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">

    <link rel="stylesheet" href="../public/css/lib/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>
<body class='login-page register-page'>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <div class="sign-box">
                    <div class="" >
                        <img src="../public/logogrande.jpg" height="75px" alt="" id="imgtipo">
                        <br>
                    </div>
                    
                    <header class="sign-title">Recuperar Contraseña</header>
                   
                    <div class="form-group">
                    <label for="usu_correo">Correo Electrónico</label>
                    <input type="text" class="form-control" id="usu_correo" name="usu_correo" placeholder="email">
                    </div>
                   
                    <button type="button" name="action" id="btnrecuperar" class="btn btn-sm btn-hero btn-success">
                                                <i class="fa fa-refresh mr-10"></i> Recuperar
                                            </button>
                    <div class="row">
                    <div class="col-lg-5 text-center">
                        <fieldset class="form-group">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../">
                                <i class="fa fa-user  mr-5"></i> Acceso
                            </a>
                        </fieldset>
                    </div>
                   
                    </div>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
            </div>
        </div>
    </div><!--.page-center-->

<script src="../public/js/lib/jquery/jquery.min.js"></script>
<script src="../public/js/lib/tether/tether.min.js"></script>
<script src="../public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="../public/js/plugins.js"></script>
    <script type="text/javascript" src="../public/js/lib/match-height/jquery.matchHeight.min.js"></script>
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
 <script src="../public/css/lib/sweetalert2/sweetalert2.min.js"></script>
<script src="../public/js/app.js"></script>
<script type="text/javascript" src="recuperarcontrasena.js"></script>
</body>
</html>