<?php
include'../conexion db/db.php';


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];



$sql="INSERT INTO formulario values(id,'$nombre','$apellido','$cedula','$universidad','$telefono','$direccion','$correo')";
$ejecutar = mysqli_query($conn,$sql);
if($ejecutar){
    echo "Datos Guardados";

    header("Location: agradecimientos.html");
}
else{
    echo "Hay Un Error";
}




?>