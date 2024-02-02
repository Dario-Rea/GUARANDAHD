<?php
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="fa fa-edit"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="fa fa-search"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                    <li class="blue with-sub">
                        <span>
                            <span class="font-icon font-icon-burger"></span>
                            <span class="lbl">Preguntas Frecuentes</span>
                        </span>
                            <ul >
                                <li><a href="..\PreguntasFrecuentes\"><span class="lbl">Ver preguntas</span></a></li>
                            </ul>
	                 </li>
                    <li class="blue-dirty">
                        <a href="#">
                            <span class="fa fa-print"></span>
                            <span class="lbl">Reportes</span>
                        </a>
                    </li>

                    <!-- -->
                    
                    <!-- -->
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="fa fa-edit"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="fa fa-users"></span>
                            <span class="lbl">Mantenimiento Usuario</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="fa fa-search"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                    <li class="blue with-sub">
                        <span>
                            <span class="font-icon font-icon-burger"></span>
                            <span class="lbl">Preguntas Frecuentes</span>
                        </span>
                            <ul >
                                <li><a href="..\IngresoPreguntasFrecuentes\"><span class="lbl">Ingresar preguntas</span></a></li>
                                <li><a href="..\PreguntasFrecuentes\"><span class="lbl">Ver preguntas</span></a></li>
                            </ul>
	                 </li>
                    <li class="blue with-sub">
                        <span>
                            <span class="fa fa-print"></span>
                            <span class="lbl">Reportes</span>
                        </span>
                        <ul >
                            <li><a href="..\Reportes\"><span class="lbl">Reporte por categoria</span></a></li>
                            <li><a href="..\Reportes\reporteporfecha.php"><span class="lbl">Incidentes por fecha</span></a></li>
                        </ul>
                    </li>
              
                </ul>
            </nav>
        <?php
    }
?>
