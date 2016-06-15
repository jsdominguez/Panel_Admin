<?php
include("conexion.php");
$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$edad = $_POST['eda'];
$correo = $_POST['cor'];
$telefono = $_POST['tel'];
$selec = $_POST['selec'];
$id = $_GET['codigo'];

pg_query("update usuario set nombre='$nombre', apellido='$apellido',edad='$edad',correo='$correo',telefono ='$telefono',Estado ='$selec' where codigo='$id'");
?>