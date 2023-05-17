<?php 
//Se llaman las variables del input
$matricula = $_POST['matricula'];
$contrasenia = $_POST['constrasenia'];

include('conexionA-car');
// Preparar la consulta SQL para obtener los datos del usuario
$consulta = "SELECT matricula FROM estudiante WHERE matricula = :matricula AND contrasenia = :contrania";
$stmt = $conection->prepare($consulta);
$stmt->bindParam(':matricula', $matricula, PDO::PARAM_STR);
$stmt->bindParam(':contrasenia', $contrasenia, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($matricula) {
    header("Location: dashboard.php"); //La ubicacion de tu siguiente página
}
else {
    header("Location:  dashboard.php"); //Lo regresas al login pq no detecto ningun usuario con esas caracteristicas
}