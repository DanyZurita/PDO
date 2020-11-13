<?php
// used to connect to the database
$host = "localhost";
$db_name = "phpBeginnerCrudLevel1";
$username = "root";
$password = '$Daniel99xdxd$';
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>