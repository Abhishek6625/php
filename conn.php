<?php

$hostname = "localhost";

$servername = "root";

$servarpassword ="";

$database ="website_db";

$conn = new mysqli($hostname, $servername ,$servarpassword ,$database);

 if($conn){
    // echo "<script>window.alert('connected')</script>" ;
 }else{
    echo "<script>window.alert('not connected')</script>" ;
 }


 if(isset($_POST["save"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $sub = $_POST["subject"];
    $mess = $_POST["message"];

         $mysql = "INSERT INTO form (name, email, subject, message) VALUES 
                    ('$name','$email','$sub','$mess')";

           $check =mysqli_query($conn, $mysql);

           if($check){
            // echo "<script>window.alert('Data Saved')</script>";
               ?>
            
            <meta http-equiv="refresh" content="0; url = http://localhost/Myprofile/index.html "/>

            <?php
           }else{
            echo "<script>window.alert('Failed')</script>";
           }
        }

   




?>

?>