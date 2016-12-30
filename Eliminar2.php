<?php
include "conexion.php";
$id=$_POST["ID"];
$sql="DELETE FROM alimentos_dif.inconut WHERE inconut.ID_N='$id'";
$res= mysqli_query ($conecta,$sql);
if($res){
    $datos=array();
    $i=0;
    while ($fila=  mysqli_fetch_assoc($res)){
        $datos[$i]=$fila;
        $i=$i+1;
    }
}
    else{
        echo"No se produjo ninguna respuesta: ";
    }
    echo json_encode($datos);
    mysqli_close($conecta);
?>