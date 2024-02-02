<?php
/**
 * Created by PhpStorm.
 * User: drea
 * Date: 03/29/2022
 * Time: 12:46
 */
require('class.phpmailer.php');
require('class.smtp.php');

require_once("../config/conexion.php");
require_once("../models/Ticket.php");
require_once("../models/Usuario.php");

class Email extends PHPMailer{
    protected $gcorreo ='drea@guarandaltda.fin.ec'; // Variable que contiene el correo destinario
    protected $gContrasena ='atic2018';// clave del contiene la contraseña del destinario

    public function ticket_abierto($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach($datos as $row){
            $id= $row["tick_id"];
            $usu= $row["usu_nom"];
            $titulo= $row["tick_titulo"];
            $cat= $row["cat_nom"];
            $prioridad= $row["tick_prioridad"];
            $correo= $row["usu_correo"];

        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Ticket Abierto";
        $this-> CharSet= 'UTF8';
        $this-> AddAddress($correo);
       // $this-> AddAddress("readario94@gmail.com");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Ticket Abierto";
        //IGUAL//
        $cuerpo = file_get_contents('../public/NuevoTicket.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblAsunto", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCategoria", $cat, $cuerpo);
        $cuerpo = str_replace("lblPrioridad", $prioridad, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Ticket Abierto");
        return $this->Send();
    }
    public function aviso_Nuevoticket($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach($datos as $row){
            $id= $row["tick_id"];
            $usu= $row["usu_nom"];
            $apellido= $row["usu_ape"];
            $titulo= $row["tick_titulo"];
            $cat= $row["cat_nom"];
            $prioridad= $row["tick_prioridad"];
            $correo= $row["usu_correo"];

        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Ticket Nuevo";
        $this-> CharSet= 'UTF8';
        //$this-> AddAddress($correo);
        $this-> AddAddress("administrador@guarandaltda.fin.ec");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Solicitud de Nuevo Ticket de ".$usu." ".$apellido;
        //IGUAL//
        $cuerpo = file_get_contents('../public/NuevoTicket.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblAsunto", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCategoria", $cat, $cuerpo);
        $cuerpo = str_replace("lblPrioridad", $prioridad, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Solicitud de Ticket Nuevo");
        return $this->Send();
    }
    public function ticket_cerrado($tick_id){
        $ticket = new Ticket();
  
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach($datos as $row){
            $id= $row["tick_id"];
            $usu= $row["usu_nom"];
            $titulo= $row["tick_titulo"];
            $cat= $row["cat_nom"];
            $prioridad= $row["tick_prioridad"];
            $correo= $row["usu_correo"];
        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Ticket Cerrado";
        $this-> CharSet= 'UTF8';
        $this-> AddAddress($correo);
        //$this-> AddAddress("readario94@gmail.com");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Ticket Cerrado";
        //IGUAL//
        $cuerpo = file_get_contents('../public/CerrarTicket.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblAsunto", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCategoria", $cat, $cuerpo);
        $cuerpo = str_replace("lblPrioridad", $prioridad, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Ticket Cerrado");
        
        return $this->Send();
    }
    public function ticket_asignado($tick_id){
        $ticket = new Ticket();
  
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach($datos as $row){
            $id= $row["tick_id"];
            $usu= $row["usu_nom"];
            $titulo= $row["tick_titulo"];
            $cat= $row["cat_nom"];
            $prioridad= $row["tick_prioridad"];
            $correo= $row["usu_correo"];
        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Ticket Asignado";
        $this-> CharSet= 'UTF8';
        $this-> AddAddress($correo);
        $this-> AddAddress("readario94@gmail.com");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Ticket Asignado";
        //IGUAL//
        $cuerpo = file_get_contents('../public/AsignarTicket.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblAsunto", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCategoria", $cat, $cuerpo);
        $cuerpo = str_replace("lblPrioridad", $prioridad, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Ticket Asignado");
        
        return $this->Send();
    }
    public function nuevo($usu_correo){
        $usuario = new Usuario();
        $datos = $usuario->get_correo_usuario($usu_correo);
        foreach ($datos as $row) {
            $nom = $row["usu_nom"].' '.$row["usu_ape"];
            $pass = $row["usu_pass"];
            $correo= $row["usu_correo"];
           
        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Registro Correcto";
        $this-> CharSet= 'UTF8';
        $this-> AddAddress($correo);
        //$this-> AddAddress("readario94@gmail.com");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Registro Correcto Help Desk :: Guaranda";
        //IGUAL//
        $cuerpo = file_get_contents('../public/nuevousuario.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnombres", $nom, $cuerpo);
        $cuerpo = str_replace("lblclave", $pass, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Registro Correcto");
        
        return $this->Send();

    }
    public function recuperar($usu_correo){
        $usuario = new Usuario();
        $datos = $usuario->get_correo_usuario($usu_correo);
        foreach ($datos as $row) {
            $nom = $row["usu_nom"].' '.$row["usu_ape"];
            $pass = $row["usu_pass"];
            $correo= $row["usu_correo"];
        }
        //IGUAL//
        $this->SMTPDebug= 0;
        $this->IsSMTP();
        $this-> Host= 'smtp.gmail.com'; //Aqui el server
        $this-> Port =587;//Aqui va el puerto
        $this-> SMTPAuth= true;//Aqui se sindica si se va a utilizar autenticacion
        $this-> Username= $this->gcorreo;
        $this-> Password= $this->gContrasena;
        $this-> From= $this->gcorreo;
        $this-> SMTPSecure= 'tls';
        $this-> FromName= "Recuperar Clave";
        $this-> CharSet= 'UTF8';
        $this-> AddAddress($correo);
        //$this-> AddAddress("readario94@gmail.com");
        $this-> WordWrap=50;
        $this-> IsHTML(true);
        $this->Subject= "Recuperar Clave Help Desk :: Guaranda";
        //IGUAL//
        $cuerpo = file_get_contents('../public/recuperarContrasena.html');
        /*parametro del template a reemplazar*/
        $cuerpo = str_replace("xnombres", $nom, $cuerpo);
        $cuerpo = str_replace("lblclave", $pass, $cuerpo);

        $this->Body=$cuerpo;

        $this->AltBody= strip_tags("Recuperar Clave");
        
        return $this->Send();

    }
}

?>