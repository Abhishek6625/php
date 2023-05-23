<?php
include "insert.php";

$id = $_GET['id'];

$query = " DELETE FROM `crud` WHERE id =$id ";

mysqli_query($conn,$query);

header('location:display.php');


?>