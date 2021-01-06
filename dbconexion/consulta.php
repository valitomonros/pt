<?php
    include "conexiondb.php";
    if($conn){
        $id = $_POST["id"];
        $SQL_delete= "DELETE FROM prueba WHERE id = ".$id;
        
        if ($conn->query($SQL_delete)){
            $respuesta =  array("resp"=>"exito");
            echo json_encode($respuesta);
                
        }
        else {
            $respuesta = array(
                "resp"=>"error"
            );
            echo json_encode($respuesta);
        }
    }
?>