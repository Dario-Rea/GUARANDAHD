<?php
    class Categoria extends Conectar{
        /*Consulta las categorias de la DB   */
        public function get_categoria(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        /*fin de comentarios para github*/
    }
?>