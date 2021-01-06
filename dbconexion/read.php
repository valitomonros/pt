<?php
    include "conexiondb.php";
    if($_POST){
        $datos = $_POST;
        $numero = count($datos);
        $cadena = '';

        foreach ($datos as $item => $value){
            
        $cadena = $cadena.",".$value;
        
        }
        $nuevacadena = substr($cadena,1);
        if($conn){
            
            $SQL_select= "SELECT ".$nuevacadena." FROM prueba";
            
            if ($conn->query($SQL_select)){
                    $result = $conn->query($SQL_select);
                    $json = array();    
                while($row = $result->fetch_assoc()) {
                    array_push($json,$row);
                }   
                echo json_encode($json);
            }
        }
        else{
        
            die("Connection failed: " . $conn->connect_error);
            
            
        }
    }
    
    else{

        
        if($conn){
            
            $SQL_select= "SELECT * FROM prueba";
            
            if ($conn->query($SQL_select)){
                    $result = $conn->query($SQL_select);
                    $json = array();    
                while($row = $result->fetch_assoc()) {
                    array_push($json,$row);
                }   
                echo json_encode($json);
            }
        }
        else{
        
            die("Connection failed: " . $conn->connect_error);
            
            
        }
    }
    
    
?>