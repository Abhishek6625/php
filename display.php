
<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: black;
            }
            table{
                background-color: white;
            }
           .blue{
            background-color: blue;
           }
           .red{
            background-color: red;
           }
          a{
            color :white;
            text-decoration: none;
           }
          
           
        </style>
    </head>


<?php

include "insert.php";

$query = "select * from crud ";

$check = mysqli_query($conn, $query);

$total = mysqli_num_rows($check);

if($total != 0){

?>

   <h2 align="center"> <mark> Displaying All Records</mark></h2>

<center><table border="1" cellspacing="7" width="50%">
    <tr>
        <th width="3%">ID</th>
        <th width="10%">Email</th>
        <th width="10%">Password</th>
        <th width="8%">Update</th>
        <th width="8%">Delete</th>
    </tr>

 <?php
    while($result = mysqli_fetch_assoc($check)){
            
        echo "<tr>
                  <td>".$result["id"]."</td>
                  <td>".$result["email"]."</td>
                  <td>".$result["password"]."</td>  

                  <td> <center class='blue'> <a href='update.php?id=$result[id]'> Update </a> </center></td>

                  <td> <center class='red'> <a href='delete.php?id=$result[id]'> Delete </a> </center> </td> 
                   
            </tr>";

    }

}else{
    echo "No record found !";
}

?>

</table>
</center>
</html>