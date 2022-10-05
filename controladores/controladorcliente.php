<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorCliente extends conectarMySQL implements interfazcontrolador{

    private $tabla = "clientes";

        public function guardar($objeto){

            $sql = "insert into ".$this->tabla." values (?,?,?,?) ";
            $sentencia = $this->getConexion()->prepare($sql);
            $objeto->codigo;
            $sentencia->bind_param("isss", $objeto->codigo,$objeto->nombres,$objeto->apellidos,$objeto->direccion);
            $sentencia->execute();
        }
        public function eliminar($objeto){}
        public function listar($objeto){}
        public function consultarRegistro($objeto){}

    }

?>