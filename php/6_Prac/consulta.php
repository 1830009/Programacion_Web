<?php

    $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $bd="ejemplo";
    $id= $_GET['id'];
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);

    $consulta="SELECT id, nombre, telefono, direccion FROM personas WHERE id=$id";
    
    $resultado=mysqli_query($conexion,$consulta);
   // $respuesta='hola';
    try{
        if($resultado->num_rows>0){
            $respuesta=  $resultado->fetch_assoc();
                /*while($fila = $resultado->fetch_assoc()){
                $respuesta=array(
                    'id' =>$fila['id'],
                    'nombre' =>$fila['nombre'],
                    'telefono' =>$fila['telefono'],
                    'direccion' =>$fila['direccion']
                );*/
            }
        }
    }catch(Exception $e){
        $respuesta =array('error'=>$e.getMessage);
    }
    mysqli_close($conexion);
    /*
     $tecnologias = array(
             'frontend' => 'HTML5,CCS3,JAVASCRIPT',
             'backend' => 'php,mysql,apache',
             'fullstack' => 'HTML5,CSS3,JAVASCRIPT,php,mysql,apache'
     );
    echo json_encode($tecnologias);*/
    echo json_encode($respuesta);
?>