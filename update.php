<?php
include("reg.php");

$id = $_GET['id'];

$query = "SELECT * FROM students where id = '$id'";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);



if(isset($_POST['update'])){
    
    $id = $_GET['id'];
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];

     $query = " UPDATE `students` SET `name` ='$name', `user` ='$user', `email` ='$email', `phone` ='$phone', `password` ='$pass', `gender` ='$gender' WHERE id = $id ";
    
           
     $check = mysqli_query($conn, $query);

           if($check){

             echo "<script>window.alert('update sussessfully')</script>";

            ?>
            
            <meta http-equiv="refresh" content="0; url = http://localhost/registation/display.php "/>

            <?php

           }else{
            echo "<script>window.alert('Failed')</script>";
           }
   
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | Abhishek </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h2>Create by Abhishek kumar !</h2>
    <main>
    <div class="container">
        <div class="title">Update Details </div>
        <div class="content">
            <form action="#" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" value="<?php echo $result['name']; ?>" name="name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" value="<?php echo $result['user']; ?>" name="user" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" value="<?php echo $result['email']; ?>" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" value="<?php echo $result['phone']; ?>" name="phone" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter your password" value="<?php echo $result['password']; ?>"  name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" placeholder="Confirm your password" name="c_password" value="<?php echo $result['c_password']; ?>"  required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="Male">
                    <input type="radio" name="gender" id="dot-2" value="Female">
                    <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
                    <span class="gender-title" >Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender" name="male" >Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender" name="Female" >Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender" name="Prefer not to say" >Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Update" name="update">
                </div>
            </form>
        </div>
    </div>
</main>
</body>

</html>

