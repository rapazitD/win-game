<?php 
     
    $name=filter_input(INPUT_POST, 'userName');
    $age=filter_input(INPUT_POST, 'userAge');
    $email=filter_input(INPUT_POST, 'inputEmail');
    $select=filter_input(INPUT_POST, 'Level');

    if(!empty($name) && !empty($age) && !empty($email) && !empty($select)){
   
    
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "fuzball"; 
        
        //create conection

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno() .')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO users (name, age, email)
            values('$name','$age', '$email')";
            if ($conn->query($sql)){
                echo "New record is inserted sucess";
            }
            else{
                echo "Error: ".$sql ."<br>".$conn>error;
            }
            $conn->close();
        } else {
        echo "Age should not be empty";
        die();
    }
    }
    else{
        echo "Username should not be empty";
        die();
    }

   
 
    
?>