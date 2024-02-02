
<?php
/**
 * Created by PhpStorm.
 * User: drea
 * Date: 03/29/2022
 * Time: 12:46
 */
    class PreguntasFrecuentes extends Conectar{
        public function listar_preguntasfrecuentes(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                        id_pregfrec,
                        nombrePregunta,
                        solucion,
                        estado
                    FROM tm_preguntafrecuente
                    where estado=1
                ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_pregunta($nombrePregunta,$solucion){
            $conectar= parent::conexion();
            parent::set_names();
                $sql="INSERT INTO tm_preguntafrecuente (id_pregfrec,nombrePregunta,solucion,estado) VALUES (NULL,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombrePregunta);
            $sql->bindValue(2, $solucion);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_pregunta_x_id($id_pregfrec){

            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                        id_pregfrec,
                        nombrePregunta,
                        solucion,
                        estado
                    FROM tm_preguntafrecuente
                    where estado=1 and id_pregfrec =?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_pregfrec);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_pregunta($id_pregfrec,$Preg_frecuente,$lblsolucion){
         
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_preguntafrecuente set
                nombrePregunta = ?,
                solucion = ?
                WHERE
                id_pregfrec = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $Preg_frecuente);
            $sql->bindValue(2, $lblsolucion);
            $sql->bindValue(3, $id_pregfrec);

            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function disable_pregunta($id_pregfrec){
         
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_preguntafrecuente set
                estado = 0
                WHERE
                id_pregfrec = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_pregfrec);

            $sql->execute();
            return $resultado=$sql->fetchAll();
        }


    }
?>