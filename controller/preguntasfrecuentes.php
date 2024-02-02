
<?php
    require_once("../config/conexion.php");
    require_once("../models/PreguntasFrecuentes.php");
    $Pregunta = new PreguntasFrecuentes();

    switch($_GET["op"]){

        case "listar":
            $datos=$Pregunta->listar_preguntasfrecuentes();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["id_pregfrec"];
                $sub_array[] = '
                <div class="container">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapse'.$row["id_pregfrec"].'">
                        '.$row["nombrePregunta"].'
                      </a>
                    </div>
                    <div id="collapse'.$row["id_pregfrec"].'" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                      <div class="activity-line-action-list">
                      <section class="activity-line-action">
                        
                          <div class="cont">
                              <div class="cont-in">
                                  <p>
                                      '.$row["solucion"].'
                                  </p>
                              </div>
                          </div>
                      </section>
                  </div>

                      </div>
                    </div>
                  </div>
              </div>
              </div>
                ';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "insert":
          $Pregunta->insert_pregunta($_POST["Preg_frecuente"],$_POST["lblsolucion"]);
        break;

        case "guardaryeditar":
          if(empty($_POST["id_pregfrec"])){   
            $Pregunta->insert_pregunta($_POST["Preg_frecuente"],$_POST["lblsolucion"]);
          }
          else {
              $Pregunta->update_pregunta($_POST["id_pregfrec"],$_POST["Preg_frecuente"],$_POST["lblsolucion"]);
          }
        break;
        case "listaredit":
          $datos=$Pregunta->listar_preguntasfrecuentes();
          $data= Array();
          foreach($datos as $row){
              $sub_array = array();
              $sub_array[] = $row["id_pregfrec"];
              $sub_array[] = $row["nombrePregunta"];
              $sub_array[] = $row["solucion"];

              if ($row["estado"]==1){
                $sub_array[] = '<i class="ace-icon fa fa-check bigger-110 text-primary"></i>';
              }else{
                $sub_array[] = '<i class="ace-icon fa fa-close bigger-110 text-danger"></i>';
              }

              $sub_array[] = '
              <button type="button" onClick="editar('.$row["id_pregfrec"].');"  id="'.$row["id_pregfrec"].'" class="btn btn-inline btn-success btn-sm ladda-button"><i class="fa fa-edit"></i></button>
             ';
              $sub_array[] = ' <button type="button" onClick="eliminar('.$row["id_pregfrec"].');"  id="'.$row["id_pregfrec"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-eye-slash"></i></button>';
              $data[] = $sub_array;
          }

          $results = array(
              "sEcho"=>1,
              "iTotalRecords"=>count($data),
              "iTotalDisplayRecords"=>count($data),
              "aaData"=>$data);
          echo json_encode($results);
          break;

          case "desactivar":
            $usuario->delete_usuario($_POST["usu_id"]);
        break;

        case "mostrar";
        $datos=$Pregunta->get_pregunta_x_id($_POST["id_pregfrec"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["id_pregfrec"] = $row["id_pregfrec"];
                $output["Preg_frecuente"] = $row["nombrePregunta"];
                $output["lblsolucion"] = $row["solucion"];
                $output["estado"] = $row["estado"];
           

            }
            echo json_encode($output);
        }   
        break;

        case "eliminar":
          $Pregunta->disable_pregunta($_POST["id_pregfrec"]);
      break;
    }
?>