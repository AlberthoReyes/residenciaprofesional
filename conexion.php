<?php
$db_hostname='mysql.hostinger.es';
$db_username='u174280093_rbd';
$db_password='ricorico';
$db_database='u174280093_dif';
$conecta= new mysqli($db_hostname,$db_username,$db_password,$db_database);


if ($conecta->connect_erno){
    printf ("Conexion fallida: %s\n", $conecta->connect_error);
    exit();
 }
else {
    echo "Conexion lista";
 }

?>