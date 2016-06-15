<?php
include("conexion.php");
$robot=$_POST["g-recaptcha-response"];
$nombre=$_POST["user"];
$pass=$_POST["pass"];

$sql="select nombre,edad from usuario where nombre='$nombre' and edad='$pass'";
$datos=pg_query($sql)or die("Erroe en la consulta");
$contar=pg_num_rows($datos);
if($contar==1 && $robot!="")
{
  echo "<h3><span class='label label-success'>Usuario Correcto</span></h3>"; 
    echo "<meta http-equiv='Refresh' content='0.5;url=index.html'>";
}
else
{
  echo "<h3><span class='label label-danger'>Usuario Incorrecto</span></h3>";
}
?>
