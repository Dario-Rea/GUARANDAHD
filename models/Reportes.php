<?php
    class Reportes extends Conectar{
        public function listar_ReporteCategoriaPrioridad($id_cat, $tick_prioridad){

            error_log('llegue->>>'.$id_cat);
            $conectar= parent::conexion();
            parent::set_names();
            if($tick_prioridad=='Todo'){
                $sql="SELECT * from tm_ticket
                where cat_id=?
                    ";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$id_cat);
                $sql->execute();
                return $resultado=$sql->fetchAll();  
            }else{
                $sql="SELECT * from tm_ticket
            where cat_id=? and tick_prioridad=?
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_cat);
            $sql->bindValue(2,$tick_prioridad);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            }
         
        }
        public function listar_ReportexFecha($fechainicio, $fechafin){

            $conectar= parent::conexion();
            parent::set_names();
                $sql="SELECT * from tm_ticket
            where DATE_FORMAT(fech_crea, '%m/%d/%Y') BETWEEN ? and ? 
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$fechainicio);
            $sql->bindValue(2,$fechafin);
            $sql->execute();
            return $resultado=$sql->fetchAll();
          
         
        }
        public function listar_ReporteCategoriaPrioridadAll(){
            $conectar= parent::conexion();
            parent::set_names();
           
                $sql="SELECT * from tm_ticket";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            }
         
    }
?>