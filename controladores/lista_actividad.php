<?php


include_once('conexions.php');

$mysqli=conectar(); 


$nombre_calle=$_POST['nr_inscrip'];


$mensaje=null;

//traer nombre de una tabla de 2017 o del 2018 segun el año en cada foreach dar valor de nombre

//o armar de alguna forma la tabla con join o algo donde traiga los valores o un union.

$consulta = "SELECT FROM rm_actividades WHERE act_nro_inscripcion=? AND act_fecha_fin=?";



$sentencia = $mysqli->prepare($consulta);

$sentencia->bind_param("ss",$val1,$val2);

$val1 = $nombre_calle;
$val2 = "0000-00-00";


$sentencia->execute();

$sentencia->store_result();

$result = $sentencia->fetch();


foreach ($result as $rest) {

	$valor=$rest->act_anio;

	$consulta2 = "SELECT FROM "

}









?>