<?php

session_start();

$servername="localhost";
$username="phpmyadmin";
$password="RedesInformaticas";
$dbname= "db_colman";
$conexion=new mysqli($servername,$username,$password,$dbname);


$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];


$sql = "SELECT COUNT(*) as total FROM usuarios WHERE mail = '$mail' AND '$contrasena'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();


if ($fila["total"] > 0) {
    $sqlNom = "SELECT nombre FROM usuarios WHERE mail = '$mail' AND '$contrasena'";
    $resultadoNom = $conexion->query($sqlNom);
    $_SESSION["infonombre"] = mysqli_fetch_array($resultadoNom)[0];
    $_SESSION["infosesion"] = "exito";
    header('Location: index.php');

} else {

    header('Location: paglogin.php');
    $_SESSION["infosesion"] = "error";
}


if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido un exito";
    
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}


?>