<?php


$hostname = "localhost";

$servername = "root";

$serverPass = "";

$databaseName = "school";


$connection = new mysqli($hostname, $servername, $serverPass, $databaseName);

if ($connection) {
    echo "Database connection successful";
} else {
    echo "not connected";
}



if (isset($_POST['Register'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $cpassword = $_POST['c_password'];



    if ($password === $cpassword) {


        if (empty(trim($name)) && empty(trim($email)) && empty(trim($password))) {
            echo "Input field cannot be empty!";
        } else {


            $sql = "INSERT INTO students (name, email ,password) VALUES ('$name','$email','$password')";

            $check = mysqli_query ($connection, $sql);

            if ($check) {
                echo "<br>";
                echo "Data Saved";

                header("location:login.html");
            } else {
                echo "Failed";
            }
        }
    } else {
        echo "Incorrect details";
    }
}
