<?php 

$servername = "localhost"; 
$username = "root";   
$password = "";   
$dbname = "move";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
    

   if (isset ($_POST['LEFT'])) 
   {         
            $name = $_POST['LEFT'];
            $stmt = $conn->prepare("INSERT INTO `Values` (`V`) 
            VALUES (?)");
            $stmt->bind_param("s", $name);
            $stmt->execute();  
            echo  $name;
        
     }
 
     if (isset ($_POST['FOWARD'])) {

    $name = $_POST['FOWARD'];
     $stmt = $conn->prepare("INSERT INTO `Values` (`V`) 
            VALUES (?)");
            $stmt->bind_param("s", $name);
            $stmt->execute(); 
    echo $name;
     }
     

     if (isset ($_POST['STOP'])) {
    $name = $_POST['STOP'];
     $stmt = $conn->prepare("INSERT INTO `Values` (`V`) 
            VALUES (?)");
            $stmt->bind_param("s", $name);
            $stmt->execute(); 
        echo $name;
     }



     if (isset ($_POST['RIGHT'])) {
    $name = $_POST['RIGHT'];
     $stmt = $conn->prepare("INSERT INTO `Values` (`V`) 
            VALUES (?)");
            $stmt->bind_param("s", $name);
            $stmt->execute(); 
    echo $name;
     }


     
      if (isset ($_POST['BACKWARD'])) {
    $name = $_POST['BACKWARD'];
    $stmt = $conn->prepare("INSERT INTO `Values` (`V`) 
            VALUES (?)");
            $stmt->bind_param("s", $name);
            $stmt->execute(); 
    echo $name;
     }
  
    


