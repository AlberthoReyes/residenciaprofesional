<?php

include "conexion.php";

$ID_N=null;
$Nom=$_POST["Nom"];
$Ap_pat=$_POST["Ap_pat"];
$Ap_mat=$_POST["Ap_mat"];
$Fec_Nac=$_POST["Fec_Nac"];
$Edad=$_POST["Edad"];
$Dir=$_POST["Dir"];
$Loc=$_POST["Loc"];
$Nom_T=$_POST["Nom_T"];
$Appat_T=$_POST["Appat_T"];
$Apmat_T=$_POST["Apmat_T"];
$Tel=$_POST["Tel"];


$sql="INSERT INTO inconut VALUES 
('$ID_N','$Nom','$Ap_pat','$Ap_mat','$Fec_Nac','$Edad','$Dir','$Loc','$Nom_T','$Appat_T','$Apmat_T','$Tel')";
$result=mysqli_query($conecta,$sql);
if($result ->connect_erno){
    printf ("Conexion fallida: %s\n", $conecta->connect_error);
    exit();
}else{
  echo "Increible, lo hiciste: ";
}
mysqli_close($conecta);
?>
