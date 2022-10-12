<?php

require("../modelos/cliente.php");
require("../controladores/controladorcliente.php");

$cliente = new Cliente(2,"Gerard","Pique","Calle falsa 123");

$cotroladorCliente = new ControladorCliente();
$cotroladorCliente -> eliminar($cliente);
echo "Elimino exitosamente1 !!!";

?>