<?php

    require_once("../config/conexion.php");
    require_once("../models/Email.php");
    $email = new Email();

    switch($_GET["op"]){
        case "ticket_abierto":
            $email->ticket_abierto($_POST["tick_id"]);
            break;
        case "aviso_Nuevoticket":
            $email->aviso_Nuevoticket($_POST["tick_id"]);
            break;
        case "ticket_cerrado":
            $email->ticket_cerrado($_POST["tick_id"]);
            break;
        case "ticket_asignado":
            $email->ticket_asignado($_POST["tick_id"]);
            break;
        case "send_recuperar":
            $email->recuperar($_POST["usu_correo"]);
            break;
    
        case "send_nuevo":/*Nuevo Usuario*/
            $email->nuevo($_POST["usu_correo"]);
            break;
        }
        
?>