<?php

    // crear conexion
    function conectarBD($server,$user,$pass,$bd){
        $conexion= mysqli_connect($server,$user,$pass,$bd);
    
        if(!$conexion){
            die("Conexión a la BD Rechazada");
            return null;
        }else{
           
            return $conexion;
        }
    }

    function fObtenerMime($wfParamCadena){
    $fsExtension = $wfParamCadena;  
    if  ($fsExtension =='bmp'){ $mime = 'image/bmp'; }
    if  ($fsExtension =='gif' ){ $mime ='image/gif' ; }
    if  ($fsExtension =='jpe' ){ $mime ='image/jpeg' ; }
    if  ($fsExtension =='jpeg'){ $mime = 'image/jpeg' ; }
    if  ($fsExtension =='jpg' ){ $mime ='image/jpeg'; }
    if  ($fsExtension =='png' ){ $mime = 'image/png'; }    
    return $mime;
}

    // revisar el exito de la conexion
    

    function desconectar($conexion){
        mysqli_close($conexion);
    }

?>    