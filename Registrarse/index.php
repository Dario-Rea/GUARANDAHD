<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="shortcut icon" href="../public/img/imagen/logomin.png">
	<title>Help-Desk :: Guaranda</title>

<link rel="stylesheet" href="../public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../public/css/lib/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


</head>
<body class='login-page register-page'>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <div class="sign-box">
                
                    <div class="" >
                        <img src="../public/logogrande.jpg" height="75px" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title">Registrarse</header>

                    <form method="post" id="usuario_form">
                        <div class="form-group">
                            <label for="usu_nom">Nombres:</label>
                                <input type="text" class="form-control"  id="usu_nom" name="usu_nom"placeholder="Nombres" required/>
                        </div>
                        <div class="form-group">
                            <label for="usu_ape">Apellidos</label>
                                <input type="text" class="form-control" id="usu_ape" name="usu_ape" required placeholder="Apellidos"/>
                        </div>
                        <div class="form-group">
                            <label for="usu_correo">Email</label>
                                <input type="email" class="form-control" id="usu_correo" name="usu_correo" required placeholder="email"/>
                        </div>
                        <div class="form-group">
                            <label for="usu_pass1">Contraseña</label>
                                <input type="password" class="form-control" id="usu_pass1" name="usu_pass1" required placeholder="Contraseña"/>
                        </div>
                        <div class="form-group">
                            <label for="usu_pass1">Contraseña</label>
                                <input type="password" class="form-control id="usu_pass2" name="usu_pass2" required placeholder="Repita Contraseña"/>
                        </div>
        
                        <button type="submit" name="action" value="add" id="btnguardar" class="btn btn-sm btn-hero btn-success">
                                                    <i class="fa fa-plus mr-10"></i> Crear Cuenta
                                                </button>
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset class="form-group">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../">
                                <i class="fa fa-user  mr-5"></i> Acceso
                                </a>
                            </fieldset>
                        </div>
                        <div class=" col-lg-7">
                            <fieldset class="form-group">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../RecuperarContrasena/">
                                    <i class="fa fa-warning mr-5"></i> Olvide mi Contraseña
                                </a>
                            </fieldset>
                        </div>
                    </div>

                </form>
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
    <!-- SweetAlert2 -->
    <script src="../public/css/lib/sweetalert2/sweetalert2.min.js"></script>
<script src="../public/js/app.js"></script>
<script type="text/javascript" src="registrarse.js"></script>


</body>
</html>