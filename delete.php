<?php
include("reg.php");

$id = $_GET['id'];

$query = " DELETE FROM students WHERE id = '$id' ";

$data =mysqli_query($conn, $query);

if($data){
    // echo "<script>window.alert('Deleted')</script>";
    
    header('location:display.php');

}else{
    echo "<script>window.alert('Not Delete')</script>";
}



?>