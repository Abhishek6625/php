<?php

include ("insert.php");

$id = $_GET['id'];

$query = "SELECT * FROM crud where id = '$id'";

$check = mysqli_query($conn, $query);

$total = mysqli_num_rows($check);

$result = mysqli_fetch_assoc($check);



if(isset($_POST['update'])){
    
    $id =$_GET['id'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = " UPDATE `crud` SET `email`='$email', `password`='$pass' WHERE  id = $id ";

    mysqli_query($conn, $query);


    header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form | Abhishek</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Update Form</span></div>
      <form action="#" method="post">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="email" placeholder="Enter the email" value="<?php echo $result['email']; ?>" name="email" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" value="<?php echo $result['password']; ?>" name="password" required>
        </div>
        <div class="row button">
          <input type="submit" value="Update" name="update">
        </div>
      </form>
    </div>
  </div>

</body>

</html>

