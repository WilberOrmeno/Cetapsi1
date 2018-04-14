<?php
include("conexion.php");
$con=conectar();
//vemos si el usuario y contraseña son válidos
$user = $_POST["user"];
$pass = $_POST["pass"];

$sql="SELECT * FROM users WHERE username='$user' and password='$pass'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

//AÑADIDO IDUSUARIO A SESSION
if($count==1) {
    session_start();
    $_SESSION["autenticado"]= "SI";
    header ('location:main.php');
}
else {
    header ('location:index.php');
}
?>