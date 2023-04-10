<?php
ini_set('display_errors',0);
include('conexion.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT* FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("home.php");

}else{
    
    include("index.html");
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>
