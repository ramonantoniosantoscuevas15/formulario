<?php
include'../conexion db/db.php';

$id=$_POST['Id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$query="UPDATE formulario set nombre='$nombre',apellido='$apellido',cedula='$cedula',
universidad='$universidad',telefono='$telefono',direccion='$direccion',correo='$correo' WHERE id=$id";
$ejecutar = mysqli_query($conn,$query);
if($ejecutar){
    echo "Datos Actualizados";
}
else{
    echo "Hay Un Error";
}
?>