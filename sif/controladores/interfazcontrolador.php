<?php

interface interfazcontrolador{
    
    public function guardar($objeto);
    public function eliminar($objeto);
    public function listar($objeto);
    public function consultarRegistro($objeto);
}

?>