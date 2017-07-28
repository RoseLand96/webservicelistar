<?php

define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','g1wbv4e6yvi6e710');
      	define('PASS','t2z30tum76qfgrzd');
		define('DB','n3ycfw3efefiynuy');
	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
    $dia=strftime("%A");

if(isset($_POST["id_servicio"])  && $dia=="Monday" || $dia=="Lunes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_lunes where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Tuesday" || $dia=="Martes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_martes where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Wednesday" || $dia=="Miercoles"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_miercoles where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Thursday" || $dia=="Jueves"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_jueves where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Friday" || $dia=="Viernes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_viernes where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Saturday" || $dia=="Sábado"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_sabado where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Sunday" || $dia=="Domingo"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos12_domingo where id_servicio=$id_servicio;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else
{
	echo "No existe el turno";
mysqli_close($con);
}
?>