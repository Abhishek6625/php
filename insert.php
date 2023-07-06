<?php

$hostname = "localhost";

$servername = "root";

$serverpass = "";

$databases = "crud_db";

$conn = new mysqli($hostname, $servername, $serverpass, $databases);

if($conn){
    // echo "connencted";
}else{
    echo "not connencted";
}

if(isset($_POST['login'])){

     $email = $_POST['email'];
     $pass = $_POST['password'];

     $query = " INSERT INTO `crud`(`email`, `password`) VALUES ('$email','$pass') ";

     $check = mysqli_query($conn, $query);

     if($check){
        // echo "<script>window.alert('Data Saved')</script>";
        header("location:login.html");
     }else{
        echo "<script>window.alert('failed')</script>";
     }
}
