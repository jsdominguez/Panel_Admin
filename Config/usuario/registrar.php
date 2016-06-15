<?php
include("conexion.php");

$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$edad = $_POST['eda'];
$correo = $_POST['cor'];
$telefono = $_POST['tel'];
$estado = $_POST['selec'];

pg_query("INSERT INTO usuario(nombre,apellido,edad,correo,telefono,estado) VALUES('$nombre','$apellido','$edad','$correo','$telefono','$estado')") ;
?>
