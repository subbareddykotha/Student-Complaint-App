<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "student care";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if($con)
    {

    }
    else{
        echo "connection failed".mysqli_connect_error();
    }
?>  