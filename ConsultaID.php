<?php
include "conexion.php";
$Nom=$_POST["W"];
$sql="SELECT * FROM rnutricio WHERE Nom LIKE '%$Nom%' ORDER BY Nom";
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
        echo "<br>";
        echo "No se produjo ninguna respuesta: ";
    }
    echo json_encode($datos);
    mysqli_close($conecta);
 
?>


