<?php
require_once("config.php");

try {
    if (isset($_POST['email'], $_POST['password'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);
        
       
       
       
       $query="SELECT * FROM login where email='$email' AND password='$password'";
       
       

                
        
        $result=$pdo->query($query);
        
        $r=$result->rowCount(); // == 1
        
        if($r==1){
            $row=$result->fetch();
            if($row['Type']=="player"){
                header("location:PlayerPage.php");
            } else if($row['Type']=="coach") {
                header("location:CoachPage.php");
            } else if($row['Type'] == "academy") {
                header("location:AcademyPage.php");
            }

        }
        
    }

    $pdo = null;
} catch (PDOException $e) {
    die($e->getMessage());
}
?>

<html>

    <head>



    </head>

    <body>

        <form method="post">
            Username: <input type="text" name="username"> <br>
            Password: <input type="password" name="password"> <br>
            <input type="submit" value="Login">
        </form>

    </body>



</html>