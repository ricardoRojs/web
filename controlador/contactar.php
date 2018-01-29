<?php

$prodcuto = $_POST['producto'];
$motivo = $_POST['motivo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$mensaje = $_POST['mensaje'];

$commit = " - ";

echo "datos: ".$prodcuto.$commit.$motivo.$commit.$nombre.$commit.$apellido.$commit.$correo.$commit.$celular.$commit.$pais.$commit.$ciudad.$commit.$mensaje;
