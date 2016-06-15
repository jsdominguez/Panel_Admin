<?php
$user=$_POST("usuario");
$pwd=$_POST("pass");

if($user=="jhosep" && $pwd=="123")
{
?>

<h3>Usuario Correcto</h3>

<?php
}
else
    {
?>
    <h3>Uusario Incorrecto</h3>
<?php
}

?>