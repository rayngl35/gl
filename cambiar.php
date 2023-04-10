<html>
<head>
    <title>Registro de Alumnos</title>
<link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="Normal">
</head>
<div id="encabezado">
<h1 class="sitio_nombre">Registro de Alumnos</h1>
<h3 class="slogan">ITL</h3>
</div>
<div id="publicacion">
<center><h2 class="titulo">Cambios:</h2></center>
</div>
<body>
<?php
if (isset($_POST['enviarDatos']))
{
include("conexion.php"); 
mysqli_query($con,"update alumnos set 
id='{$_POST['id']}'
,ci='{$_POST['ci']}'
,nombre='{$_POST['nombre']}'
,apellido_paterno='{$_POST['apellido_paterno']}'
,apellido_materno='{$_POST['apellido_materno']}'
, no_control='{$_POST['no_control']}'
,carrera='{$_POST['carrera']}'
, correo='{$_POST['correo']}'
,ingreso='{$_POST['ingreso']}'
, egreso='{$_POST['egreso']}'
where no_control= '{$_POST['no_control']}'");
}
?>
<center>Los cambios se han realizado satisfactoriamente<br>
<a href="index.html">Volver</a>
</center>
</body>
</html>