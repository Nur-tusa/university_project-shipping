<?php
  
  $con = mysqli_connect("localhost","nur","saatar.6","LoginSystem");   
try {
    $servername = "localhost";
    $dbname = "LoginSystem";
    $username = "root";
    $password = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=LoginSystem",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>