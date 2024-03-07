
<header class="site-header">
    <div class="container-fluid">

        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="../../public/img/imagen/Logo.png" alt="">
            <img class="hidden-lg-up" src="../../public/img/imagen/logomin.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                <!-- <div class="dropdown dropdown-notification messages">
                    <a href="#"
                        class="header-alarm dropdown-toggle active"
                        id="dd-messages"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="font-icon-mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
                        <div class="dropdown-menu-messages-header">
                            <ul class="nav" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        data-toggle="tab"
                                        href="#tab-incoming"
                                        role="tab">
                                        Respuesta para soporte
                                        <span class="label label-pill label-danger">0</span>
                                    </a>
                                </li>
                            </ul>
                            <!--<button type="button" class="create">
                                <i class="font-icon font-icon-pen-square"></i>
                            </button>-->
                            <?php
                            $fechaactual= date("Y-m-d");
                            ?>
                        <!-- </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                <div class="dropdown-menu-messages-list">
                                    
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><i class="fa fa-eye"></i></span>
                                        <span class="mess-item-name">Tim Collins</span>
                                        <span class="mess-item-txt"><?php
                                        echo $fechaactual= date("Y-m-d h:m:s");
                                        ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-notif-more">
                            <a href="#">Ver mas</a>
                        </div>
                    </div>
                </div> --> 
                <!-- <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Respuesta de Ticket
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">Ver mas</a>
	                            </div>
	                        </div>
	                    </div>
 -->

                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION["usu_correo"] ?><img src="../../public/<?php echo $_SESSION["rol_id"] ?>.jpg" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="../MntPerfil/"><span class="fa fa-cogs"></span> Cambiar Contraseña</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usu_id"] ?>"><!-- ID del Usuario-->
                <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"] ?>"><!-- Rol del Usuario-->
                <input type="hidden" id="asignarx" value="<?php echo $_SESSION["asignar"] ?>"><!-- Rol del Usuario-->
                <div class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toggle no-arr">
                        <span class="font-icon font-icon-user"></span>
                        <span class="lblcontactonomx"><?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>