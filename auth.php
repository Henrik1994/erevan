<?php
session_start() ;
$servername = "localhost";
$username = "henrik";
$password = "1234";
$dbname = "erevan";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } 


if(isset($_REQUEST['send'])){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $tel = $_REQUEST['tel'];
    $city = $_REQUEST['city'];
    $password = $_REQUEST['password'];

    // print_r($name." ". $email." ".$tel." ".$city." ".$password );


        $sql = "INSERT into `grancvel` (`name`, `email`, `tel`, `city`, `password`) VALUES ('$name', '$email','$tel','$city','$password')";

        if ($conn->query($sql) === TRUE) {      
            echo "New record created successfully";
              $_SESSION["name"] = $name;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

     
}


$conn->close();

