<?php
include("../conexion.php");
$con=conectar();
//vemos si el usuario y contraseña son válidos
$userprofile_picture = $_POST["userprofile_picture"];
$codAlumno = $_POST["codAlumno"];
$apePaterno = $_POST["apePaterno"];
$apeMaterno = $_POST["apeMaterno"];
$nombres  = $_POST["nombres"];
$sexo = $_POST["sexo"];
$grado = $_POST["grado"];
$fecNacimiento = $_POST["fecNacimiento"];
$telefono = $_POST["telefono"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];


$claves = preg_split("~/~", $fecNacimiento);
$fecNacimiento = $claves[2].'-'.$claves[1].'-'.$claves[0];

$sql="INSERT INTO `alumnos`(`cod_alumno`, `nombres`, `ape_materno`, `ape_paterno`, `sexo`, `grado`, `fecNacimiento`, `telefono`, `dni`, `email`, `direccion`)
VALUES ('$codAlumno','$nombres','$apeMaterno','$apePaterno','$sexo','$grado','$fecNacimiento','$telefono','$dni','$email','$direccion')";
$stmt = mysqli_query($con,$sql);

header ('location:alumno.php');
?>