<?php

error_reporting(0);

$hostname = "localhost";

$servername = "root";

$serverpass = "";

$databases = "school_db";

$conn = new mysqli($hostname, $servername, $serverpass, $databases);

if($conn){
    // echo "<script>window.alert('connected successfully')</script>";
}else{
    echo "<script>window.alert('not connected')</script>" .mysqli_connect_error();
}

if(isset($_POST["save"])){

    $name = $_POST["name"];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass = $_POST["password"];
    $cpass = $_POST["c_password"];
    $gender = $_POST["gender"];

    if ($pass === $cpass){

        if (empty(trim($name)) && empty(trim($user)) && empty(trim($email)) && empty(trim($phone))
        && empty(trim($pass)) && empty(trim($gender))){
            
            echo "Input filed connot be empty!";
        }else{
            $mysql = "INSERT INTO students (name, user, email, phone, password, gender) VALUES 
                    ('$name','$user','$email','$phone','$pass','$gender')";

           $check =mysqli_query($conn, $mysql);

           if($check){
            echo "<script>window.alert('Data Saved')</script>";
               ?>
            
            <meta http-equiv="refresh" content="0; url = http://localhost/registation/reg.html "/>

            <?php
           }else{
            echo "<script>window.alert('Failed')</script>";
           }
        }
    }else{
        echo "Incorrect details";
    }
   
}




?>