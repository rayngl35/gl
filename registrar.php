<?php
    ini_set('display_errors',0);
    include("funciones.php");
    include("conexion.php");
    $id=$_POST["id"];
    $ci=$_POST["ci"];
    $nombre=$_POST["nombre"];
    $apellido_paterno=$_POST["apellido_paterno"];
    $apellido_materno=$_POST["apellido_materno"];
    $no_control=$_POST["no_control"];
    $carrera=$_POST["carrera"];
    $correo=$_POST["correo"];
    $ingreso=$_POST["ingreso"];
    $egreso=$_POST["egreso"];
    $sql=0;
 if(num($ci))
        echo("solo numeros en el ci<br>");
        else 
        if($nombre=="")
        echo("ingresa un nombre<br>");
        else 
        if(!no_control($no_control))
        echo("hubo errores en el numero de control,debe ser de 8 digitos<br>");
        else
        if(!comprobar_email($correo))
        echo("el email<b>$correo</b>es correcto<br>");
        else{
           $sql="INSERT INTO alumnos (ci,nombre,apellido_paterno,apellido_materno,no_control,carrera,correo, ingreso,egreso)VALUES('$ci','$nombre','$apellido_paterno','$apellido_materno','$no_control','$carrera','$correo','$ingreso','$egreso')"; 
        }
    if(!mysqli_query($con,$sql))
    echo"no se pudieron registrar los datos";

    else
    
    
    echo("<center>el registro se ha realizado satisfactoriamente<br><br>
    <b>ci:</b>".$ci."<br>
    <b>nombre:</b>".$nombre."<br>
    <b>apellido paterno:</b>".$apellido_paterno."<br>
    <b>apellido materno:</b>".$apellido_materno."<br>
    <b>no control:</b>".$no_control."<br>
    <b>carrera:</b>".$carrera."<br>
    <b>correo:</b>".$correo."<br>
    <b>ingreso:</b>".$ingreso."<br>
    <b>egreso:</b>".$egreso."");
?>
<br><br>
<a href="index.html">volver</a>