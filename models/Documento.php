<?php
/**
 * Created by PhpStorm.
 * User: drea
 * Date: 03/29/2022
 * Time: 12:46
 */
class Documento extends  Conectar{
    public  function  insert_documento($tick_id,$doc_nom){
        $conectar= parent::conexion();
        /*CONSULTA SQL*/
        error_log($tick_id);
        $sql="INSERT INTO td_documento(doc_id,tick_id,doc_nom, fecha_crea, estado) VALUES (null, ?,?, now(),1)";
        $sql= $conectar->prepare($sql);
        $sql->bindParam(1,$tick_id);
        $sql->bindParam(2,$doc_nom);
        $sql->execute();
    }
     public function get_documento_x_ticket($tick_id){
        $conectar= parent::conexion();
        /* consulta sql*/
        $sql =" SELECT * FROM td_documento where tick_id=?";
        $sql= $conectar->prepare($sql);
        $sql->bindParam(1,$tick_id);
        $sql->execute();
         return $resultado = $sql->fetchAll();
    }

}
?>