<?php

class Cliente{
    public $codigo;
    public $nombres;
    public $apellidos;
    public $direccion;

    function __construct($codigo,$nombres,$apellidos,$direccion){

        $this->codigo =  $codigo;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
    }


}



?>