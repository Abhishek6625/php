<?php
$hostname = "localhost";

$serverName = "root";

$serverPass = "";

$databaseName = "school";


$connection = new mysqli ($hostname, $serverName, $serverPass, $databaseName);

if ($connection) {
    echo "Database connection successful";
} else {
    echo "not connected";
}



if(isset($_POST['login'])){

    $name = $_POST['name'];

    $password = $_POST['password'];


    $sql = "SELECT * from students WHERE name = '$name' AND password = '$password'";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result)){
        
        header("location: test.html");

    } else {
        
        echo " <br> Incorrect username and password";
    }


}
