<?php
require_once("config.php");

try{
if (isset($_POST['email'], $_POST['password'])) {
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    
    extract($_POST);
    
    echo "<h1>  Hello this is checking if i am  actually a Academy </h1> <br>";
    
    
    $query="INSERT INTO login VALUES('$email','$name','$password','academy')";
    
    $result= $pdo->exec($query);

    $query1="INSERT INTO academy VALUES('$email','$name','$password','$foundedIn') ";

    $result1= $pdo->exec($query1);


    

}
} catch (PDOException $e){
    die($e->getMessage());
    
}

?>