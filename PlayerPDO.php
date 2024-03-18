<?php
require_once("config.php");

try{
if (isset($_POST['email'], $_POST['password'])) {
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    
    extract($_POST);
    
    echo "<h1>  Hello this is checking if i am  actually a player </h1> <br>";
    
    
    $query="INSERT INTO login VALUES('$email','$name','$password','player')";
    
    $result= $pdo->exec($query);

    $query1="INSERT INTO player VALUES('$email','$name','$dob','$password', NULL) ";

    $result1= $pdo->exec($query1);


    

}
} catch (PDOException $e){
    die($e->getMessage());
    
}

?>