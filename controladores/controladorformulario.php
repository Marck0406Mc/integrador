<?php

require("../modelos/cliente.php");
require("../controladores/controladorcliente.php");

$controlador = $_POST['controlador'];
$operacion = $_POST['operacion'];

if ($controlador == "cliente") {
$codigo = $_POST['codigo'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$controlador = $_POST['controlador'];

$objeto = new Cliente($codigo,$nombres,$apellidos,$direccion);
$controladorGenerico = new ControladorCliente();
}


if ($operacion == "guardar"){
    $controladorGenerico->guardar($objeto);
    echo "Inserto exitosamente1 !!!";

}elseif ($operacion == "eliminar"){
    $controladorGenerico->eliminar($objeto);
echo "Eliminar exitosamente1 !!!";
}


?>