<?php
    include "conexiondb.php";

    $titulo = filter_var($_POST['titulo'],FILTER_SANITIZE_STRING);
    $autor = filter_var($_POST['autor'],FILTER_SANITIZE_STRING);
    $paginas = filter_var($_POST['paginas'],FILTER_SANITIZE_STRING);
    $editorial = filter_var($_POST['editorial'],FILTER_SANITIZE_STRING);
    if($conn){
        
        $SQLINSERT = "INSERT INTO prueba( titulo, autor, paginas,editorial) VALUES ('".$titulo."','".$autor."',".$paginas.",'".$editorial."')";
          
          if ($conn->query($SQLINSERT)) {
              $id=mysqli_insert_id($conn);
                echo json_encode($id);
          }
          
          
          
    }
    else{
       
        die("Connection failed: " . $conn->connect_error);
         
          
    }
    
    
?>