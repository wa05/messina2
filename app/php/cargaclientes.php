<?php 
include('conexion.php');


    $data = json_decode(file_get_contents("php://input")); 
    $codigo      = $dbhandle -> real_escape_string($data->codigo);    
    $tipofact     =$dbhandle ->  real_escape_string($data->tipofact);
    $cliente      =$dbhandle ->  real_escape_string($data->cliente);    
    $cuit      = $dbhandle -> real_escape_string($data->cuit);    
    $direccion     =$dbhandle ->  real_escape_string($data->direccion);
    $ciudad      =$dbhandle ->  real_escape_string($data->ciudad);  
    $ultimopago      = $dbhandle -> real_escape_string($data->ultimopago);    
    $monto     =$dbhandle ->  real_escape_string($data->monto);
    $latitud      =$dbhandle ->  real_escape_string($data->latitud);  
    $longitud      = $dbhandle -> real_escape_string($data->longitud);    
    $promediopesos     =$dbhandle ->  real_escape_string($data->promediopesos);
    $promediobot      =$dbhandle ->  real_escape_string($data->promediobot);  
    $carpeta     =$dbhandle ->  real_escape_string($data->carpeta);
    $obs      =$dbhandle ->  real_escape_string($data->obs);  

    $query = 'INSERT INTO messinapp (codigo,tipofact,cliente,cuit,direccion,ciudad,ultimopago,monto,latitud,longitud,promediopesos,promediobot,carpeta,obs) VALUES ("' . $codigo  . '","' . $tipofact . '","' . $cliente . '","' . $cuit . '","' . $direccion . '","' . $ciudad . '","' . $ultimopago . '","' . $monto . '","' . $latitud . '","' . $longitud . '","' . $promediopesos . '","' . $promediobot . '","' . $carpeta . '","' . $obs . '")';

    $dbhandle->query($query);


?>