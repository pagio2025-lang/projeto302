<?php
$servername ="localhost";
$username = "rot";
$password = "";
$dbname = "todo_list_db_302";
$conn = new mysqli ($servername,$username,$password,dbname);
if($sconn->connect_error){
    die("Erro na conexão:".$conn->connect_error);
}
?>