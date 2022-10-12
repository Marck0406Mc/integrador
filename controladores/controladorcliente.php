<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorCliente extends conectarMySQL implements interfazcontrolador{

    private $tabla = "clientes";

        public function guardar($objeto){

            $sql = "select 1 from ".$this->tabla." where codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->codigo);
            $sentencia->execute();
            $results -> $sentencia -> fetch();
            if($results->num_rows = 0){

                $sql = "insert into ".$this->tabla." values (?,?,?,?) ";
                $sentencia = $this->getConexion()->prepare($sql);
                $objeto->codigo;
                $sentencia->bind_param("sssi",$objeto->nombres,$objeto->apellidos,$objeto->direccion, $objeto->codigo);
                $sentencia->execute();

            }

            $sql = " update ".$this->tabla." set nombres = ?, set apellidos = ?, set direccion = ? where codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $objeto->codigo;
            $sentencia->bind_param("isss", $objeto->codigo,$objeto->nombres,$objeto->apellidos,$objeto->direccion);
            $sentencia->execute();
        }
        public function eliminar($objeto){
            $sql = "delete from ".$this->tabla." where  codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->codigo);
            $sentencia->execute();
        }
        public function listar($objeto){}
        public function consultarRegistro($objeto){}

    }

?>