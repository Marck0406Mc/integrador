<?php

require("../modelos/cliente.php");
require("../controladores/controladorcliente.php");

$cliente = new Cliente(1,"Shakira","Meberack","Calle falsa 123");

$cotroladorCliente = new ControladorCliente();
$cotroladorCliente -> guardar($cliente);
echo "Inserto exitosamente1 !!!";

?>