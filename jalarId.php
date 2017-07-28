<?php
$db_host = "rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
     $db_name = "n3ycfw3efefiynuy";
     $db_user = "g1wbv4e6yvi6e710";
     $db_password = "t2z30tum76qfgrzd";
    
     $connection = mysqli_connect($db_host, $db_user,$db_password);
    
mysqli_select_db($db_name);
    @mysqli_query("SET NAMES 'utf8'");
if(isset($_POST["nombre_servicio"])){

$nombre_servicio= $_POST["nombre_servicio"];
$sql_query = "SELECT * FROM servicio where nombre_servicio=$nombre_servicio";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else
{
	echo "No existe el id";
mysqli_close($connection);
}
?>