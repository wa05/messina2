<?php 
include('conexion.php');


    $data = json_decode(file_get_contents("php://input")); 

    $codigo = $dbhandle -> real_escape_string($data->codigo);    
    $tipoFact =$dbhandle ->  real_escape_string($data->tipoFact);
    $cliente =$dbhandle ->  real_escape_string($data->cliente);    
    $cuit = $dbhandle -> real_escape_string($data->cuit);    
    $direccion =$dbhandle ->  real_escape_string($data->direccion);
    $ciudad =$dbhandle ->  real_escape_string($data->ciudad);  
    $ultimoPago = $dbhandle -> real_escape_string($data->ultimoPago);    
    $monto =$dbhandle ->  real_escape_string($data->monto);
    $latitud =$dbhandle ->  real_escape_string($data->latitud);  
    $longitud = $dbhandle -> real_escape_string($data->longitud);    
    $promedioPesos =$dbhandle ->  real_escape_string($data->promedioPesos);
    $promedioBot =$dbhandle ->  real_escape_string($data->promedioBot);  
    //$carpeta =$dbhandle ->  real_escape_string($data->carpeta);
    $obs =$dbhandle ->  real_escape_string($data->obs);  
    $diaRep =$dbhandle ->  real_escape_string($data->diaRep);

    $query = 'INSERT INTO messinapp (codigo,tipoFact,cliente,cuit,direccion,ciudad,ultimoPago,monto,latitud,longitud,promedioPesos,promedioBot,obs,diaRep) VALUES ("' . $codigo  . '","' . $tipoFact . '","' . $cliente . '","' . $cuit . '","' . $direccion . '","' . $ciudad . '","' . $ultimoPago . '","' . $monto . '","' . $latitud . '","' . $latitud . '","' . $longitud . '","' . $promedioPesos . '","' . $promedioBot . '","' . $obs . '","' . $diaRep . '")';

    $dbhandle->query($query);


?>