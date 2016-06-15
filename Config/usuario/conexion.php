<?php
$cadena="host='localhost' port='5432' dbname='tesis' user='postgres' password='root'";
 @pg_connect($cadena)or die("Error de Conexion.". pg_last_error());
?>