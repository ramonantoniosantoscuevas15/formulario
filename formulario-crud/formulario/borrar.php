<?php
include'../conexion db/db.php';
$id=$_POST['Id'];
$query="DELETE FROM formulario WHERE id='$id'";
$ejecutar = mysqli_query($conn,$query);
if($ejecutar){
    echo "Dato Eliminado";
}
else{
    echo "Hay Un Error";
}
?>