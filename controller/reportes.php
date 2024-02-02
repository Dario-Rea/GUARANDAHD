
<?php
    require_once("../config/conexion.php");
    require_once("../models/Reportes.php");
    $Pregunta = new Reportes();
    require_once("../models/Usuario.php");
    $usuario = new Usuario();

    switch($_GET["op"]){

        case "listar":
            $id_cat=$_POST['cat_id'];
            $tick_prioridad=$_POST['tick_prioridad'];
           
            $datos=$Pregunta->listar_ReporteCategoriaPrioridad($id_cat, $tick_prioridad);
            $data= Array();
            $i=0;
            foreach($datos as $row){
              $i=$i+1;
                $sub_array = array();
                $sub_array[] = $i;
                $datos1= $usuario->get_usuario_x_id($row["usu_id"]);
                foreach($datos1 as $row1){
                    $sub_array[] = $row1["usu_nom"].' '.$row1["usu_ape"];
                }
                if($row["cat_id"]==1){
                  $sub_array[] = 'Hardware';
                }
                elseif($row["cat_id"]==2){
                  $sub_array[] = 'Software requerimiento nuevo';
                }
                elseif($row["cat_id"]==3){
                  $sub_array[] = 'Software modificacion de base de datos';
                }
                elseif($row["cat_id"]==4){
                  $sub_array[] = 'Redes';
                }
                elseif($row["cat_id"]==5){
                  $sub_array[] = 'Cajeros';
                }
                elseif($row["cat_id"]==6){
                  $sub_array[] = 'Otros';
                }
                $sub_array[] = $row["tick_prioridad"];
                $sub_array[] = $row["tick_titulo"];
                $sub_array[] = $row["tick_descrip"];
                $sub_array[] = $row["tick_estado"];
                $sub_array[] = $row["fech_crea"];
                $datos2= $usuario->get_usuario_x_id($row["usu_asig"]);
                foreach($datos2 as $row2){
                  $sub_array[] = $row2["usu_nom"].' '.$row2["usu_ape"];
                }
                $sub_array[] = $row["fech_asig"];
                $sub_array[] = '';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
        case "listarAll":

          $datos=$Pregunta->listar_ReporteCategoriaPrioridadAll();
          $data= Array();
          $i=0;
          foreach($datos as $row){
            $i=$i+1;
              $sub_array = array();
              $sub_array[] = $i;
              $datos1= $usuario->get_usuario_x_id($row["usu_id"]);
              foreach($datos1 as $row1){
                  $sub_array[] = $row1["usu_nom"].' '.$row1["usu_ape"];
              }
              if($row["cat_id"]==1){
                $sub_array[] = 'Hardware';
              }
              elseif($row["cat_id"]==2){
                $sub_array[] = 'Software requerimiento nuevo';
              }
              elseif($row["cat_id"]==3){
                $sub_array[] = 'Software modificacion de base de datos';
              }
              elseif($row["cat_id"]==4){
                $sub_array[] = 'Redes';
              }
              elseif($row["cat_id"]==5){
                $sub_array[] = 'Cajeros';
              }
              elseif($row["cat_id"]==6){
                $sub_array[] = 'Otros';
              }
              $sub_array[] = $row["tick_prioridad"];
              $sub_array[] = $row["tick_titulo"];
              $sub_array[] = $row["tick_descrip"];
              $sub_array[] = $row["tick_estado"];
              $sub_array[] = $row["fech_crea"];
              $datos2= $usuario->get_usuario_x_id($row["usu_asig"]);
              foreach($datos2 as $row2){
                $sub_array[] = $row2["usu_nom"].' '.$row2["usu_ape"];
              }
              $sub_array[] = $row["fech_asig"];
              $sub_array[] = '';
              $data[] = $sub_array;
          }
          $results = array(
              "sEcho"=>1,
              "iTotalRecords"=>count($data),
              "iTotalDisplayRecords"=>count($data),
              "aaData"=>$data);
          echo json_encode($results);
        break;
        case "listarPorFecha":
          $fechainicio=$_POST['fechainicio'];
          $fechafin=$_POST['fechafin'];
        
          $datos=$Pregunta->listar_ReportexFecha($fechainicio, $fechafin);
          $data= Array();
          $i=0;
          foreach($datos as $row){
            $i=$i+1;
              $sub_array = array();
              $sub_array[] = $i;
              $datos1= $usuario->get_usuario_x_id($row["usu_id"]);
              foreach($datos1 as $row1){
                  $sub_array[] = $row1["usu_nom"].' '.$row1["usu_ape"];
              }
              if($row["cat_id"]==1){
                $sub_array[] = 'Hardware';
              }
              elseif($row["cat_id"]==2){
                $sub_array[] = 'Software requerimiento nuevo';
              }
              elseif($row["cat_id"]==3){
                $sub_array[] = 'Software modificacion de base de datos';
              }
              elseif($row["cat_id"]==4){
                $sub_array[] = 'Redes';
              }
              elseif($row["cat_id"]==5){
                $sub_array[] = 'Cajeros';
              }
              elseif($row["cat_id"]==6){
                $sub_array[] = 'Otros';
              }
              $sub_array[] = $row["tick_prioridad"];
              $sub_array[] = $row["tick_titulo"];
              $sub_array[] = $row["tick_descrip"];
              $sub_array[] = $row["tick_estado"];
              $sub_array[] = $row["fech_crea"];
              $datos2= $usuario->get_usuario_x_id($row["usu_asig"]);
              foreach($datos2 as $row2){
                $sub_array[] = $row2["usu_nom"].' '.$row2["usu_ape"];
              }
              $sub_array[] = $row["fech_asig"];
              $sub_array[] = '';
              $data[] = $sub_array;
          }
          $results = array(
              "sEcho"=>1,
              "iTotalRecords"=>count($data),
              "iTotalDisplayRecords"=>count($data),
              "aaData"=>$data);
          echo json_encode($results);
      break;

       
     
    }
?>