<?php
include ('db_connection.php');
if ($_SERVER["REQUEST_METHOD"] =="POST"){
   $title = $_POST['title'];
    $sql= "INSERT INTO tasks (Title,status,created_at) VALUES ('$title','pendente', NOW() )";
    if ($conn -> query ($sql) === TRUE ) {
       header ("location:index.php");
      
} exit; }else{ 
    
         echo "erro:"  . $conn ->error;      

}
$conn -> close();   ?>
]