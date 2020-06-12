<?php

   /* if(isset($_Post['insert']))
    {
        try {
            $pdoConnect = new PDO("mysql:host=localhost;dbname=fuzball;","root","");
        } catch (PDOException $exc){
            echo $exc->getTraceAsString();
            exit();
        }
        
        $name=$_POST['userName'];
        $age=$_POST['userAge'];
        $email=$_POST['inputEmail'];
        $select=$_POST['Level'];
    } */

    
    $name=$_POST['userName'];
    $age=$_POST['userAge'];
    $email=$_POST['inputEmail'];
    $select=$_POST['Level'];

 

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "fuzball"; 


   
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

   

    $sql = "INSERT INTO users (name, age, email, level)
            VALUES('$name', '$age', '$email', '$select')";
    
    mysqli_query($conn,$sql); 

    
?>