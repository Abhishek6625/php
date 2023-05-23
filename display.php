<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: #d071f9;
            }
            table{
                background-color: white;
            }
            .update ,.delete{
                background-color: green;
                color: white;
                border: none;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                cursor: pointer;
                font-weight: 700;
            }
            .delete{
                background-color: red;
            }
        </style>
    </head>
</html>

<?php

include("reg.php");

$query = "SELECT * FROM students";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

// $result = mysqli_fetch_assoc($data);

// echo $result["name"]." ".$result["user"]." ".$result["email"]." ".$result["phone"];

if($total != 0){

?>

   <h2 align="center"> <mark> Displaying All Records</mark></h2>

<center><table border="1" cellspacing="7" width="90%">
    <tr>
        <th width="3%">ID</th>
        <th width="10%">NAME</th>
        <th width="10%">USER</th>
        <th width="10%">EMAIL</th>
        <th width="8%">PHONE</th>
        <th width="10%">GENDER</th>
        <th width="10%">OPERATIONS</th>
    </tr>

 <?php
    while($result = mysqli_fetch_assoc($data)){
            
        echo "<tr>
                  <td>".$result["id"]."</td>
                  <td>".$result["name"]."</td>
                  <td>".$result["user"]."</td>
                  <td>".$result["email"]."</td>
                  <td>".$result["phone"]."</td>
                  <td>".$result["gender"]."</td>

                  <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'> </a>

                  <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'> </a> </td>  

            </tr>";

    }

}else{
    echo "No record found !";
}

?>

</table>
</center>

<script>
    function checkdelete(){

        return confirm('Are you sure your want to delete this record ?');
    }
</script>