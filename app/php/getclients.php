<?php

include('conexion.php');

$query="SELECT * FROM messinapp";
$rs = $dbhandle->query($query);

while($row = $rs->fetch_assoc()){
	$data[]=$row;
}

print json_encode($data);

?>