<?php

    $conexion = mysqli_connect('localhost', 'proyecto', '1234', 'changa_now');
 
    if(!$conexion){      
        echo "Error en la conexión";        
        exit;   
    }   
    
//echo "Conexión correcta";   
